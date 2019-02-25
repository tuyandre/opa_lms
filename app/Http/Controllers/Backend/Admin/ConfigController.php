<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    use FileUploadTrait;

    public function getGeneralSettings()
    {
        $type = config('theme_layout');
        $sections = Config::where('key','=','layout_'.$type)->first();
        $footer_data = Config::where('key','=','footer_data')->first();
        $footer_data = json_decode($footer_data->value);
        $sections = json_decode($sections->value);
        return view('backend.settings.general',compact('sections','footer_data'));
    }

    public function saveGeneralSettings(Request $request)
    {
        $requests = $this->saveLogos($request);
        if ($request->get('access_registration') == null) {
            $requests['access_registration'] = 0;
        }
        if(!$request->get('mailchimp_double_opt_in')){
            $requests['mailchimp_double_opt_in'] = 0;
        }
        if ($request->get('access_users_change_email') == null) {
            $requests['access_users_change_email'] = 0;
        }
        if ($request->get('access_users_confirm_email') == null) {
            $requests['access_users_confirm_email'] = 0;
        }
        if ($request->get('access_captcha_registration') == null) {
            $requests['access_captcha_registration'] = 0;
        }
        if ($request->get('access_users_requires_approval') == null) {
            $requests['access_users_requires_approval'] = 0;
        }

        foreach ($requests->all() as $key => $value) {
            if ($key != '_token') {
                $key = str_replace('__', '.', $key);
                $config = Config::firstOrCreate(['key' => $key]);
                $config->value = $value;
                $config->save();
            }
        }

        return back()->withFlashSuccess(__('alerts.backend.general.updated'));
    }

    public function getSocialSettings()
    {
        return view('backend.settings.social');
    }

    public function saveSocialSettings(Request $request)
    {
        $requests = request()->all();
        if ($request->get('services_facebook_active') == null) {
            $requests['services_facebook_active'] = 0;
        }
        if ($request->get('services_google_active') == null) {
            $requests['services_google_active'] = 0;
        }
        if ($request->get('services_twitter_active') == null) {
            $requests['services_twitter_active'] = 0;
        }
        if ($request->get('services_linkedin_active') == null) {
            $requests['services_linkedin_active'] = 0;
        }
        if ($request->get('services_github_active') == null) {
            $requests['services_github_active'] = 0;
        }
        if ($request->get('services_bitbucket_active') == null) {
            $requests['services_bitbucket_active'] = 0;
        }

        foreach ($requests->except as $key => $value) {
            if ($key != '_token') {
                $key = str_replace('__', '.', $key);
                $config = Config::firstOrCreate(['key' => $key]);
                $config->value = $value;
                $config->save();
            }
        }

        return back()->withFlashSuccess(__('alerts.backend.general.updated'));
    }

    public function getContact(){
        $contact_data = config('contact_data');
        return view('backend.settings.contact',compact('contact_data'));
    }

    public function getFooter(){
        $footer_data = config('footer_data');
        return view('backend.settings.footer',compact('footer_data'));
    }

    public function getNewsletterConfig(){
        $newsletter_config = config('newsletter_config');
        return view('backend.settings.newsletter',compact('newsletter_config'));
    }

    public function getSendGridLists(Request $request){
        $apiKey = $request->apiKey;
        $sg = new \SendGrid($apiKey);
        try{
            $response = $sg->client->contactdb()->lists()->get();
            return $response->body();
        }catch (Exception $e){
            \Log::info($e->getMessage());
            return ['status' => 'error' ,'message' => $e->getMessage()];
        };



//        $request_body = json_decode('{
//        "name": "Laravel LMS"
//    }');
//        $response = $sg->client->contactdb()->lists()->post($request_body);
//
//        return $response->body();
    }

}
