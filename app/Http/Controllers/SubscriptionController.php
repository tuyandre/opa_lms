<?php

namespace App\Http\Controllers;

use App\Models\Stripe\StripePlan;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    private $path;

    public function __construct()
    {
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

    public function plans()
    {
        $plans = StripePlan::get();
        return view($this->path.'.subscription.plans', compact('plans'));
    }

    public function showForm(StripePlan $plan)
    {
        $intent = auth()->user()->createSetupIntent();
        return view($this->path.'.subscription.form', compact('plan', 'intent'));
    }

    /**
     * Process the form
     */
    public function subscribe(Request $request, StripePlan $plan)
    {
        $paymentMethod = $request->paymentMethod;
        // grab the user
        $user = $request->user();
        $address = [
            "city" => $request->city,
            "country" => "IN",
            "line1" => $request->address,
            "line2" => null,
            "postal_code" => $request->postal_code,
            "state" => $request->state,
        ];

        $user->createOrGetStripeCustomer();

        $user->updateStripeCustomer([
            'description' => 'Software development services',
            'email' => $request->stripeEmail,
            "address" => $address
        ]);

        // create the subscription
        try {
           $user->newSubscription('default', $plan->plan_id)
            ->quantity($plan->quantity??0)
            ->trialDays($plan->trial_period_days??0)
            ->create($paymentMethod, [
                'email' => $user->email,
            ]);
            \Session::flash('success', trans('labels.subscription.done'));
        } catch (\Exception $e) {
            \Log::info($e->getMessage() . ' for subscription plan ' .$plan->name. ' User Name: '.$user->name.' Id:' .$user->id);
            return redirect()->route('subscription.plans')->withErrors('Error creating subscription.');
        }
        return redirect()->route('subscription.status');
    }


    /**
     * Update the subscription
     */
    public function updateSubscription(Request $request, StripePlan $plan)
    {
        $user = $request->user();

        // if a user is cancelled
        if ($user->subscribed('default') and $user->subscription('default')->onGracePeriod()) {

            if ($user->onPlan($plan->plan_id)) {
                // resume the plan
                $user->subscription('default')->resume();
            } else {
                // resume and switch plan
                $user->subscription('default')->resume()->swap($plan->plan_id);
            }

            // if not cancelled, and switch
        } else {
            // change the plan
            $user->subscription('default')->swap($plan->plan_id);
        }

        $user->subscription('default')->updateQuantity($plan->quantity??0);


        \Session::flash('success', trans('labels.subscription.update'));
        return redirect()->route('subscription.status');
    }

    public function status(){
        return view('frontend.subscription.status');
    }
}
