<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Order;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaypalPaymentController extends Controller
{

    private $_api_context;

    public function __construct()
    {

        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);
    }

    public function payWithPaypal($order_id)
    {
        try {
            $order = Order::query()->where(['id' => $order_id])->first();
            if ($order == null)
                throw new \Exception("Invalid Payment Request");
            if ($order->status == 1)
                throw new \Exception("Payment Already Processed.");
            $data = encrypt(['order_id' => $order_id]);
            return view('web_view.paypal_payment', compact('data'));
        } catch (\Exception $e) {
            \Session::put('error', $e->getMessage());
            return view('web_view.status');
        }
    }

    public function paypalHandlePayment(Request $request)
    {
        $requestData = decrypt($request->data);
        $order = Order::query()->findOrFail($requestData['order_id']);
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();
        $currency = getCurrency(config('app.currency'))['short_code'];
        $item_1->setName('Neon LMS Order')
            ->setCurrency($currency)
            ->setQuantity(1)
            ->setPrice($order->amount);

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency($currency)
            ->setTotal($order->amount);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Enter Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('paypal-payment.status', compact('requestData')))
            ->setCancelUrl(URL::route('paypal-payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);
        } catch (\Exception $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');
                return Redirect::route('paypal-make-payment');
            } else {
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::route('paypal-make-payment');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        Session::put('paypal_payment_id', $payment->getId());
        Session::put('paypal_payment', ['paypal_payment_id' => $payment->getId(), 'order_id' => $requestData['order_id']]);
        if (isset($redirect_url)) {
            return Redirect::away($redirect_url);
        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::route('paypal-make-payment');
    }

    public function getPaymentStatus(Request $request)
    {
        $payment_id = Session::get('paypal_payment_id');
        $paypal_payment = session()->get('paypal_payment');
        $order_id = $paypal_payment['order_id'];
        session()->forget('paypal_payment');
        Session::forget('paypal_payment_id');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::put('error', 'Payment failed');
            return Redirect::route('paypal-make-payment', $order_id);
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {
            Order::query()->findOrFail($order_id)->update([
                "payment_type" => 2,
                "status" => 1,
                "transaction_id" => $payment_id,
                "remarks" => '',
            ]);
            \Session::put('success', 'Payment success !!');
            return view('web_view.status');
        }
        \Session::put('error', 'Payment failed !!');
        return Redirect::route('paypal-make-payment', $order_id);
    }
}
