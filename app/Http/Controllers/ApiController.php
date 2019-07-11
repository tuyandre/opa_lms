<?php

namespace App\Http\Controllers;

use App\Models\Auth\User;
use App\Models\Config;
use Arcanedev\NoCaptcha\Rules\CaptchaRule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    /**
     * Get the Signup Form
     *
     * @return [json] config object
     */
    public function signupForm()
    {
        $fields = [];
       if(config('registration_fields') != NULL){
           $fields= json_decode(config('registration_fields'),true );
       }
       if(config('access.captcha.registration') > 0){
           $fields[] = ['name'=>'g-recaptcha-response','type' => 'captcha'];
       }
       return response()->json(['status' => 'success','fields' => $fields]);
    }

    public function signup(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'g-recaptcha-response' => (config('access.captcha.registration') ? ['required',new CaptchaRule()] : ''),
        ],[
            'g-recaptcha-response.required' => __('validation.attributes.frontend.captcha'),
        ]);
        $user = new User([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->dob = isset($request->dob) ? $request->dob : NULL ;
        $user->phone = isset($request->phone) ? $request->phone : NULL ;
        $user->gender = isset($request->gender) ? $request->gender : NULL;
        $user->address = isset($request->address) ? $request->address : NULL;
        $user->city =  isset($request->city) ? $request->city : NULL;
        $user->pincode = isset($request->pincode) ? $request->pincode : NULL;
        $user->state = isset($request->state) ? $request->state : NULL;
        $user->country = isset($request->country) ? $request->country : NULL;
        $user->save();

        $userForRole = User::find($user->id);
        $userForRole->confirmed = 1;
        $userForRole->save();
        $userForRole->assignRole('student');
        $user->save();
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    /**
     * Get the App Config
     *
     * @return [json] config object
     */
    public function getConfig(Request $request)
    {
        $data = ['font_color','contact_data','counter','total_students','total_courses','total_teachers','logo_b_image','logo_w_image','logo_white_image','contact_data','footer_data','app.locale','app.display_type','app.currency','app.name','app.url','access.captcha.registration','paypal.active','payment_offline_active'];
        $json_arr = [];
        $config = Config::whereIn('key',$data)->select('key','value')->get();
        foreach ($config as $data){
            if((array_first(explode('_',$data->key)) == 'logo') || (array_first(explode('_',$data->key)) == 'favicon')){
                $data->value = asset('storage/logos/'.$data->value);
            }
            $json_arr[$data->key ] = (is_null(json_decode($data->value, true))) ? $data->value : json_decode($data->value, true) ;
        }
        return response()->json(['status' => 'success','data' =>$json_arr]);
    }


}
