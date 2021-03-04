<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $translations = [
            'global' => [
                'app_name' => "Neon LMS",
                'exit_app_modal_message' => "Are You Sure To Quit?",
                'yes' => "Yes",
                'no' => "No",
                'ok' => "Ok",
                'no_data_found' => "No Data Found",
            ],
            "login_page" => [
                'header' => "Hello! Login Here",
                'email' => "Email",
                'email_required_error' => "Please enter email",
                'email_invalid_error' => "Please enter valid email",
                'password' => "Password",
                'password_required_error' => "Please enter password",
                'remember_me' => "Remember me",
                'forgot_password' => "Forgot Password",
                'sign_in_button' => "Sign In",
                'no_account_text' => "Don't have account ?",
                'sign_up' => "Sign Up",
                'login_with_text' => "Login With",
                'reset_password_button' => "Reset Password",
            ],
            "sign_up_page" => [
                'header' => "Sign Up",
                'first_name' => "First Name",
                'first_name_required_error' => "Please enter first name",
                'last_name' => "Last Name",
                'last_name_required_error' => "Please enter last name",
                'phone_number' => "Phone Number",
                'email' => "Email",
                'email_required_error' => "Please enter email",
                'email_invalid_error' => "Please enter valid email",
                'password' => "Password",
                'password_required_error' => "Please enter password",
                'password_invalid_error' => "Please enter a valid password",
                'city' => "City",
                'sign_up_button' => "Sign Up",
            ],
            "side_drawer" => [
                'home' => "Home",
                'course' => "Course",
                'bundle' => "Bundle",
                'blog' => "Blog",
                'my_purchase' => "My Purchase",
                'certificate' => "Certificate",
                'chat' => "Chat",
                'forum' => "Forum",
                'contact' => "Contact",
                'logout' => "Logout",
            ],
            "home_page" => [
                'courses' => "Courses",
                'bundles' => "Bundles",
                'bundle' => "Bundle",
                'teachers' => "Teachers",
                'faqs' => "Faqs",
                'contact_us' => "Contact Us",
                'why_us' => "Why Us",
                'testimonial' => "Testimonial",
                'about_us' => "About Us",
            ],
            "courses_page" => [
                'header' => "Course",
                'sort_by' => "Sort By",
                'none' => "None",
                'popular' => "Popular",
                'trending' => "Trending",
                'featured' => "Featured",
            ],
            "bundles_page" => [
                'header' => "Bundle",
                'sort_by' => "Sort By",
                'none' => "None",
                'popular' => "Popular",
                'trending' => "Trending",
                'featured' => "Featured",
            ],
            "faqs_page" => [
                'header' => "FAQs",
                'information_message' => "Find Your Questions & Answers",
            ],
            "teachers_page" => [
                'header' => "Teachers",
                'information_message' => "Find Your Questions & Answers",
            ],
            "blog_page" => [
                'previous_post' => "Previous Post",
                'next_post' => "Next Post",
                'course_timeline' => "Course Timeline : ",
                'lesson_timeline' => "Lesson Timeline : ",
            ],
            "contact_page" => [
                'header' => "Contact",
                'information_message' => "Send Us A Message.",
                'name' => "Your Name",
                'name_required_error' => "Please enter name",
                'email' => "Your Email",
                'email_required_error' => "Please enter email",
                'email_invalid_error' => "Please enter valid email",
                'phone_number' => "Your Phone",
                'phone_number_required_error' => "Please enter phone number",
                'message' => "Message",
                'message_required_error' => "Please enter your comment",
            ],
            "cart_page" => [
                'header' => "Cart",
                'add_to_cart_button' => "Add To Cart",
                'added_to_cart' => "Added to cart",
                'shop' => "Shop",
                'sub_total' => "Sub Total",
                'shipping' => "Shipping",
                'total_amount' => "Total",
                'tax' => "Tax",
                'promo_code_placeholder' => "Enter Promo Code",
                'promo_code_required_error' => "Please enter promo code",
                'promo_code_valid_error' => "Please input valid coupon",
                'apply_button' => "Apply",
                'offer' => "Offer",
                'confirm_order_button' => "Confirm Order",
                'payment_title' => "Payment",
                'select_payment_method' => "Select Payment Method",
            ],
            "message_page" => [
                'header' => "Message",
                'search_user' => "Search User",
                'invoice' => "Invoice",
                'all' => "ALL",
                'outstanding' => "OUTSTANDING",
                'paid' => "PAID"
            ],
        ];
        DB::table('ltm_translations')->where('group', 'app')->where('locale', 'en')->delete();
        foreach ($translations as $page => $values){
            foreach ($values as $key => $value){
                DB::table('ltm_translations')->insert([
                    'status' => 0,
                    'locale' => 'en',
                    'group' => 'app',
                    'key' => $page.'.'.$key,
                    'value' => $value,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]);
            }
        }
    }
}
