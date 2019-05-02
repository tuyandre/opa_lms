<?php

namespace App\Http\Controllers;

use App\Mail\OfflineOrderMail;
use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class CartController extends Controller
{

    private $path;


    public function __construct()
    {
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

        $path = 'frontend';
        if(session()->has('display_type')){
            if(session('display_type') == 'rtl'){
                $path = 'frontend-rtl';
            }else{
                $path = 'frontend';
            }
        }else if(config('app.display_type') == 'rtl'){
            $path = 'frontend-rtl';
        }
        $this->path = $path;
    }

    public function index(Request $request)
    {
        $ids= Cart::session(auth()->user()->id)->getContent()->keys();
        $courses = Course::find($ids);
        return view($this->path.'.cart.checkout', compact('courses'));
    }

    public function addToCart(Request $request)
    {
        $course = Course::findOrFail($request->get('course_id'));
        $teachers = $course->teachers->pluck('id', 'name');
        $cart_items = Cart::session(auth()->user()->id)->getContent()->keys()->toArray();
        if(!in_array($course->id,$cart_items)) {

            Cart::session(auth()->user()->id)
                ->add($course->id, $course->title, $course->price, 1,
                    [
                        'user_id' => auth()->user()->id,
                        'description' => $course->description,
                        'image' => $course->course_image,
                        'teachers' => $teachers
                    ]);
        }
        Session::flash('success', 'Course added to cart successfully');
        return back();
    }

    public function checkout(Request $request)
    {
        $course = Course::findOrFail($request->get('course_id'));
        $teachers = $course->teachers->pluck('id', 'name');
        $cart_items = Cart::session(auth()->user()->id)->getContent()->keys()->toArray();
        if(!in_array($course->id,$cart_items)){
            Cart::session(auth()->user()->id)
                ->add($course->id, $course->title, $course->price, 1,
                    [
                        'user_id' => auth()->user()->id,
                        'description' => $course->description,
                        'image' => $course->course_image,
                        'teachers' => $teachers
                    ]);
        };
        $cart_items =  Cart::session(auth()->user()->id)->getContent()->keys()->toArray();
        $courses = Course::findOrFail($cart_items);
        return view($this->path.'.cart.checkout', compact('courses','total'));
    }

    public function clear(Request $request)
    {
        Cart::session(auth()->user()->id)->clear();
        return back();
    }

    public function remove(Request $request)
    {

        Cart::session(auth()->user()->id)->remove($request->course);
        return redirect(route('cart.index'));
    }

    public function stripePayment(Request $request)
    {
        //Making Order
        $order = $this->makeOrder();


        //Charging Customer
        $status = $this->createStripeCharge($request);

        if($status == 'success'){
            $order->status = 1;
            $order->payment_type = 1;
            $order->save();
            foreach ($order->items as $item){
                $item->course->students()->attach(\Auth::id());
            }

            //Generating Invoice
            generateInvoice($order);

            Cart::session(auth()->user()->id)->clear();
            return redirect()->route('status');

        }else{
            $order->status = 2;
            $order->save();
            return redirect()->route('cart.index');
        }
    }

    public function paypalPayment(Request $request){
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $items=[];

        $cartItems = Cart::session(auth()->user()->id)->getContent();
        $cartTotal = Cart::session(auth()->user()->id)->getTotal();
        foreach ($cartItems as $cartItem){
            $item_1 = new Item();
            $item_1->setName($cartItem->name) /** item name **/
            ->setCurrency('USD')
                ->setQuantity(1)
                ->setPrice($cartItem->price); /** unit price **/
            $items[] = $item_1;
        }

        $item_list = new ItemList();
        $item_list->setItems($items);
        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($cartTotal);


        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription(auth()->user()->name);

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('cart.paypal.status')) /** Specify return URL **/
        ->setCancelUrl(URL::route('cart.paypal.status'));
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('failure', 'Connection timeout');
                return Redirect::route('cart.paypal.status');
            } else {
                \Session::put('failure', 'Some error occur, sorry for inconvenient');
                return Redirect::route('cart.paypal.status');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());
        if (isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }
        \Session::put('failure', 'Unknown error occurred');
        return Redirect::route('cart.paypal.status');
    }

    public function offlinePayment(Request $request){
        //Making Order
        $order = $this->makeOrder();
        $order->payment_type = 3;
        $order->status  = 0;
        $order->save();
        $content = [];
        $items = [];
        $counter = 0;
        foreach (Cart::session(auth()->user()->id)->getContent() as $key=>$cartItem){
            $counter++;
            array_push($items,['number' => $counter,'name'=>$cartItem->name,'price' => $cartItem->price]);
        }

        $content['items'] = $items;
        $content['total'] =  Cart::session(auth()->user()->id)->getTotal();
        $content['reference_no'] =  $order->reference_no;

        try {
            \Mail::to(auth()->user()->email)->send(new OfflineOrderMail($content));
        } catch (\Exception $e) {
           \Log::info($e->getMessage().' for order '.$order->id);
        }

        Cart::session(auth()->user()->id)->clear();
        \Session::flash('success', 'Request received successfully! check your registered email for further details');
        return redirect()->route('courses.all');
    }

    public function getPaymentStatus(){
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('failure', 'Payment failed');
            return Redirect::route('cart');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $order = $this->makeOrder();
        $order->payment_type  = 2;
        $order->save();
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') {
            Cart::session(auth()->user()->id)->clear();
            \Session::flash('success', 'Payment success');
            $order->status = 1;
            $order->save();
            foreach ($order->items as $item){
                $item->course->students()->attach(\Auth::id());
            }

            //Generating Invoice
            generateInvoice($order);

            return Redirect::route('status');
        }else{
            \Session::flash('failure', 'Payment failed');
            $order->status = 2;
            $order->save();
            return Redirect::route('cart');
        }


    }

    private function makeOrder(){
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->reference_no  = str_random(8);
        $order->amount  = Cart::session(auth()->user()->id)->getTotal();
        $order->status  = 1;
        $order->payment_type  = 3;
        $order->save();

        //Getting and Adding items
        foreach (Cart::session(auth()->user()->id)->getContent() as $cartItem){
            $order->items()->create([
                'course_id'=> $cartItem->id,
                'price' => $cartItem->price
            ]);
        }

        return $order;
    }

    private function createStripeCharge($request)
    {
        $status="";
        Stripe::setApiKey(config('services.stripe.secret'));
        $amount = Cart::session(auth()->user()->id)->getTotal();
        try {
            Charge::create(array(
                "amount" => $amount * 100,
                "currency" => "usd",
                "source" => $request->reservation['stripe_token'], // obtained with Stripe.js
                "description" => auth()->user()->name
            ));
            $status = "success";
            Session::flash('success', 'Payment done successfully !');
        } catch (\Exception $e) {
            \Log::info($e->getMessage() . ' for id = ' . auth()->user()->id);
            Session::flash('failure', "Error! Please Try again.");
            $status = "failure";
        }
        return $status;
    }




}
