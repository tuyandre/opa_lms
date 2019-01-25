<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class CartController extends Controller
{

    public function index()
    {
        return view('frontend.cart.index');
    }

    public function addToCart(Request $request)
    {
        $course = Course::findOrFail($request->get('course_id'));
        $teachers = $course->teachers->pluck('id', 'name');
        Cart::session(auth()->user()->id)
            ->add($course->id, $course->title, $course->price, 1,
                [
                    'user_id' => auth()->user()->id,
                    'description' => $course->description,
                    'image' => $course->course_image,
                    'teachers' => $teachers
                ]);
        Session::flash('success', 'Course added to cart successfully');
        return back();
    }

    public function checkout(Request $request)
    {
        $ids = explode(',', $request->course_id);
        $courses = Course::findOrFail($ids);
        return view('frontend.cart.checkout', compact('courses'));
    }

    public function clear(Request $request)
    {
        Cart::session(auth()->user()->id)->clear();
        return back();
    }

    public function remove(Request $request)
    {
        Cart::session(auth()->user()->id)->remove($request->course);
        return back();
    }

    public function payment(Request $request)
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
            Cart::session(auth()->user()->id)->clear();
            return redirect()->route('courses.all');

        }else{
            $order->status = 2;
            $order->save();
            return back();
        }
    }

    private function makeOrder(){
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->reference_no  = str_random(8);
        $order->amount  = Cart::session(auth()->user()->id)->getTotal();
        $order->status  = 0;
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
        Stripe::setApiKey(env('STRIPE_SECRET'));
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
