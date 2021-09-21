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
                'language_app_modal_message' => 'This feature requires app Restart, would you like to continue?',
                'language_app_modal_title' => 'Language Change!',
                'exit_app_title' => 'Hold On!',
                'no_data_found' => "No Data Found",
                'price' => "Price",
                'pariatur' => "Pariatur",
                'search_placeholder' => "Search here..",
                'placeholder' => 'Placeholder',
                'no_certificate' => 'No Certificate',
                'not_have_any_purchase' => 'You not have any purchase.'
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
                'contact' => 'Contact',
                'why_us' => "Why Us",
                'why' => 'Why',
                'testimonial' => "Testimonial",
                'about_us' => "About Us",
                'about' => 'About',
                'us' => 'Us',
                'info_text' => "Inventive Solution For Education",
                'our' => 'Our'
            ],
            "courses_page" => [
                'header' => "Course",
                'sort_by' => "Sort By",
                'none' => "None",
                'popular' => "Popular",
                'trending' => "Trending",
                'featured' => "Featured",
                "course_timeline" => "Course Timeline : ",
                "timeline_header" => "TimeLine Detail",
                'course_buy_require_error' => 'Please buy course',
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
                'about_teacher' => "About Teacher",
                'teacher_specialist' => "Teacher Specialist",
            ],
            "blog_page" => [
                'header' => "Blog",
                'detail_header' => "Blog Detail",
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
                'phone_number_characters_size_error' => "Please enter a valid phone number",
                'message' => "Message",
                'message_required_error' => "Please enter your comment",
                "submit_button" => "Submit"
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
                'expire_date' => 'Expiry Date',
                'promo_code' => 'Promo Code',
                'grand_total' => 'Grand Total',
                'course_buy_require_error' => 'Please buy course',
            ],
            "message_page" => [
                'header' => "Message",
                'search_user' => "Search User",
                'all' => "ALL",
                'outstanding' => "OUTSTANDING",
                'paid' => "PAID",
                "type_here" => 'Type here',
                "create_message_header" => 'Create Message',
                "text_required_error" => "Please enter text",
                "user_required_error" => "At lest select one"
            ],
            "profile_page" => [
                "header" => "Profile",
                'my_detail_title' => 'My Detail',
                "first_name" => "Enter Your First Name",
                "last_name" => "Enter Your Last Name",
                "phone_number" => "Enter Your phone Number",
                "email" => "Enter Your Email",
                "address" => "Enter Your Address",
                "city" => "Enter Your City",
                "state" => "Enter Your State",
                "pin_code" => "Enter Your pincode",
                "country" => "Enter Your Country",
                "save_button" => "Save & Continue",
            ],
            "quiz_page" => [
                'error_message' => 'please select answer',
                'next_button' => 'Next',
                'result_button' => 'Show Result',
                'start_button' => 'Start',
                'retest_button' => 'Retest',
                'score_title' => 'Your Test Score',
                'percentage_title' => 'Gained Percentage',
                'result_title' => 'Your Result',
            ],
            "certificate_page" => [
                "header" => "Certificate",
                'progress' => 'Progress',
                "memory_access_permission_text" => 'App needs access to memory to download the file',
                'storage_permission' => 'Storage Permission',
                'permission_denied' => 'Permission Denied!',
                "storage_permission_text" => 'You need to give storage permission to download the file',
                "download" => 'Download'
            ],
            "forums_page" => [
                "header_forums" => 'Forums',
                "detail_header" => 'Forums Detail',
                "answer_text" => 'Answer',
                "categories_placeholder" => 'Select categories',
                "discussion_placeholder" => 'Add New Discussion',
                "title_placeholder" => 'Title',
                "add_button" => "Add",
                'category_required_error' => "Please select categories",
                'title_required_error' => "Please enter title",
                'discussion_required_error' => "Please enter discussion",
            ]
        ];
        DB::table('ltm_translations')->where('group', 'app')->where('locale', 'en')->delete();
        foreach ($translations as $page => $values) {
            foreach ($values as $key => $value) {
                DB::table('ltm_translations')->insert([
                    'status' => 0,
                    'locale' => 'en',
                    'group' => 'app',
                    'key' => $page . '.' . $key,
                    'value' => $value,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]);
            }
        }
    }
}
