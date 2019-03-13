<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'lang' => [
      'en' => 'English',
      'sp' => 'Spanish',
      'fr' => 'French',
    ],
    'general' => [
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'trash' => 'Trash',
        'edit' => 'Edit',
        'copyright' => 'Copyright',
        'delete_selected' => 'Delete Selected',
        'no_data_available' => 'No data available',
        'custom' => 'Custom',
        'delete' => 'Delete',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update',
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new' => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more' => 'More',
        'sr_no' => 'Sr No.',
        'read_more' => 'Read More',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'user_actions' => 'User Actions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'abilities' => 'Abilities',
                    'roles' => 'Roles',
                    'social' => 'Social',

                    'status' => 'Status',/*=== Custom String ===*/

                    'total' => 'user total|users total',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],

        ],
        /*====================Custom strings====================*/
        'dashboard' => [
            'title' => 'Dashboard',
            'students' => 'Students',
            'trending' => 'Trending',
            'teachers' => 'Teachers',
            'completed' => 'Completed',
            'no_data' => 'No data available',
            'buy_course_now' => 'Buy course now',
            'your_courses' => 'Your Courses',
            'students_enrolled' => 'Students Enrolled To<br> Your Courses',
            'recent_reviews' => 'Recent Reviews',
            'recent_orders' => 'Recent Orders',
            'recent_contacts' => 'Recent Contacts',
            'view_all' => 'View All',
            'course' => 'Course',
            'review' => 'Review',
            'time' => 'Time',
            'recent_messages' => 'Recent Messages',
            'message' => 'Message',
            'message_by' => 'Message By',
            'courses' => 'Courses',
            'ordered_by' => 'Ordered By',
            'view' => 'View',
            'amount' => 'Amount',
            'recent_contact_requests' => 'Recent Contact Requests',
            'name' => 'Name',
            'email' => 'Email',


        ],
        'teachers' => [
            'title' => 'Teachers',
            'create' => 'Create Teacher',
            'edit' => 'Edit Teacher',
            'view' => 'View Teachers',
            'fields' => [
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'email' => 'Email Address',
                'password' => 'Password',
                'image' => 'Image',
                'status' => 'Status',
            ]
        ],
        'categories' => [
            'title' => 'Categories',
            'create' => 'Create Category',
            'edit' => 'Edit Category',
            'view' => 'View Categories',
            'fields' => [
                'name' => 'Name',
                'image' => 'Image',
                'select_icon' => 'Select Icon',
                'icon' => 'Icon',
                'icon_type' => [
                    'title' => 'Icon type',
                    'select_any' => 'Select Any',
                    'image' => 'Upload image',
                    'icon' => 'Select Icon'
                ],
                'or' => 'Or',
                'slug' => 'Slug',
                'courses' => 'Courses',
                'status' => 'Status',
            ]
        ],
        'courses' => [
            'title' => 'Courses',
            'create' => 'Create Course',
            'edit' => 'Edit Course',
            'view' => 'View Courses',
            'add_teachers' => 'Add Teachers',
            'add_categories' => 'Add Categories',
            'select_teachers' => 'Select Teachers',
            'select_category' => 'Select Category',
            'slug_placeholder' => 'Input slug or it will be generated automatically',
            'category' => 'Category',
            'save_timeline' => 'Save timeline',
            'course_timeline' => 'Course timeline',
            'timeline_description' => 'Drag and change sequence of Lessons/Tests for course',
            'test' => 'Test',
            'lesson' => 'Lesson',
            'listing_note' => 'Only Published Lessons and Tests will be Displayed and Sorted.',

            'fields' => [
                'teachers' => 'Teachers',
                'lessons' => [
                    'add' => 'Add Lessons',
                    'view' => 'View Lessons'
                ],
                'course' => 'Course',
                'sidebar' => 'Add Sidebar',
                'status' => 'Status',
                'featured' => 'Featured',
                'popular' => 'Popular',
                'trending' => 'Trending',
                'title' => 'Title',
                'slug' => 'Slug',
                'description' => 'Description',
                'category' => 'Category',
                'price' => 'Price',
                'course_image' => 'Course Image',
                'start_date' => 'Start Date',
                'published' => 'Published',
                'meta_title' => 'Meta Title',
                'meta_description' => 'Meta Description',
                'meta_keywords' => 'Meta Keywords',
            ]
        ],
        'lessons' => [
            'title' => 'Lessons',
            'create' => 'Create Lesson',
            'edit' => 'Edit Lesson',
            'view' => 'View Lessons',
            'slug_placeholder' => 'Input slug or it will be generated automatically',
            'short_description_placeholder' => 'Input short description of lesson',
            'select_course' => 'Select Course',
            'max_file_size' => '(max file size 5MB)',
            'fields' => [
                'course' => 'Course',
                'title' => 'Title',
                'position' => 'Position',
                'free_lesson' => 'Free Lesson',
                'published' => 'Published',
                'lesson_image' => 'Lesson Image',
                'short_text' => 'Short Text',
                'youtube_videos' => 'YouTube Videos',
                'slug' => 'Slug',
                'full_text' => 'Full Text',
                'downloadable_files' => 'Downloadable Files',
            ]

        ],
        'tests' => [
            'title' => 'Tests',
            'create' => 'Create Test',
            'edit' => 'Edit Test',
            'view' => 'View Tests',
            'fields' => [
                'course' => 'Course',
                'lesson' => 'Lesson',
                'title' => 'Title',
                'description' => 'Description',
                'questions' => 'Questions',
                'published' => 'Published',

            ]

        ],
        'questions' => [
            'title' => 'Questions',
            'create' => 'Create Question',
            'edit' => 'Edit Question',
            'view' => 'View Questions',
            'fields' => [
                'course' => 'Course',
                'lesson' => 'Lesson',
                'title' => 'Title',
                'question' => 'Question',
                'question_image' => 'Question Image',
                'score' => 'Score',
                'tests' => 'Tests',
                'option_text' => 'Option Text',
                'correct' => 'Correct',
            ]
        ],
        'questions_options' => [
            'title' => 'Questions Option',
            'create' => 'Create Option',
            'edit' => 'Edit Option',
            'view' => 'View Question Options',
            'fields' => [
                'course' => 'Course',
                'lesson' => 'Lesson',
                'title' => 'Title',
                'question' => 'Question',
                'question_option' => 'Question Option',
                'score' => 'Score',
                'tests' => 'Tests',
                'option_text' => 'Option Text',
                'correct' => 'Correct',

            ]

        ],

        'orders' => [
            'title' => 'Orders',
            'complete' => 'Complete Manually',
            'offline_requests' => 'Offline Requests',
            'view_invoice' => 'View Invoice',
            'download_invoice' => 'Download Invoice',
            'fields' => [
                'reference_no' => 'Reference No.',
                'ordered_by' => 'Ordered By',
                'items' => 'Items',
                'amount' => 'Amount',
                'user_email' => 'User Email',
                'date' => 'Order date',
                'payment_status' => [
                    'title' => 'Payment',
                    'completed' => 'Completed',
                    'pending' => 'Pending',
                    'failed' => 'Failed',
                ],
                'payment_type' => [
                    'title' => 'Payment Type',
                    'stripe' => 'Credit / Debit Card (Stripe Payment Gateway)',
                    'offline' => 'Offline',
                    'paypal' => 'Paypal',
                ]
            ]

        ],

        'invoices' => [
            'title' => 'Invoices',
            'fields' => [
                'order_date' => 'Order Date',
                'view' => 'View',
                'amount' => 'Amount',
                'download' => 'Download',
            ]
        ],

        'messages' => [
            'title' => 'Messages',
            'compose' => 'Compose',
            'search_user' => 'Search User',
            'start_conversation' => 'Start a conversation',
            'select_recipients' => 'Select Recipients',
            'type_a_message' => 'Type a message',
        ],
        'menu-manager' => [
            'title' => 'Menu Manager'
        ],
        'general_settings' => [
            'mail_configuration_note' => 'Have you configured <a target="_blank" href="' . route('admin.general-settings', ['tab' => 'email']) . '">Mail Settings</a>? It is compulsory to setup to send/receive emails',
            'management' => 'General Settings',
            'app_name' => 'App Name',
            'app_url' => 'App URL',
            'app_locale' => 'App Locale',
            'app_timezone' => 'App Timezone',
            'mail_driver' => 'Mail Driver',
            'mail_host' => 'Mail Host',
            'mail_port' => 'Mail Port',
            'mail_from_name' => 'Mail From Name',
            'mail_from_address' => 'Mail From Address',
            'mail_username' => 'Mail Username',
            'mail_password' => 'Mail Password',
            'enable_registration' => 'Enable Registration',
            'change_email' => 'Change Email',
            'password_history' => 'Password History',
            'password_expires_days' => 'Password Expires Days',
            'requires_approval' => 'Requires Approval',
            'confirm_email' => 'Confirm Email',
            'homepage' => 'Select Homepage',
            'captcha_status' => 'Captcha Status',
            'captcha_site_key' => 'Captcha Key',
            'captcha_site_secret' => 'Captcha Secret',
            'google_analytics' => 'Google Analytics Code',
            'theme_layout' => 'Theme Layout',
            'font_color' => 'Font Color',
            'layout_type' => 'Layout Type',
            'layout_note' => 'This will change frontend theme layout',
            'sections_note' => 'Once you click on update, you will see list of sections to on/off.',
            'counter' => 'Counter',
            'counter_note' => '<b>Static</b> =  Manually add data for counter. Please enter exact text you want to display on frontend counter section,<br> <b>Database/Real</b> = It will take real data from database for all the fields (Students enrolled, Total Courses, Total Teachers)',
            'total_students' => 'Enter Total Students. Ex: 1K, 1Million, 1000 etc.',
            'total_teachers' => 'Enter Total Teachers. Ex: 1K, 1000 etc.',
            'total_courses' => 'Enter Total Courses. Ex: 1K, 1000 etc.',

            'contact' => [
                'title' => 'Contact',
                'primary_address' => 'Primary Address',
                'secondary_address' => 'Secondary Address',
                'primary_email' => 'Primary Email',
                'primary_email_note' => 'This email will be used to correspond "Contact Us" emails',
                'secondary_email' => 'Secondary Email',
                'primary_phone' => 'Primary Phone',
                'secondary_phone' => 'Secondary Phone',
                'short_text' => 'Short Text',
                'location_on_map' => 'Location on Map',
                'map_note' => '<h3>How to embed Location for Map?</h3>
                                <p>Do following simple steps and you are good to go:</p>
                                <ol class="map-guide">
                                    <li>Go to <a class="text-bold" target="_blank" href="//maps.google.com">Google Map</a> </li>
                                    <li>Search the place you want to add by Entering address / location in input box located on upper-left corner</li>
                                    <li>Once you get the place you want. It shows details in left sidebar. Click on <i class="fa fa-share-alt text-primary"></i> button</li>
                                    <li>A popup will appear which will have two tabs <b>Send a link</b> and <b>Embed a Map</b></li>
                                    <li>Click on <b>Embed a map</b> It will show you chosen Place on Map</li>
                                    <li>Now click on the dropdown from the left. By default <b>Medium</b> is selected. Click on it and Select <b>Large</b></li>
                                    <li>Now Click on <b class="text-primary">COPY HTML</b> link from it and <b>Paste</b> that code here in <b>Location on Map</b>.</li>
                                </ol>',
                'show' => 'Show',

            ],
            'newsletter' => [
                'title' => 'Newsletter Configuration',
                'mail_provider' => 'Mail Service Provider',
                'mail_provider_note' => '<b>Note </b>: You can select any Mail service provider to receive all the emails which are being used to <b>subscribe newsletter</b>.<br> Select and setup according to steps given. <b>It is compulsory</b>, if you want to use <b>newsletter subscription</b> form.',
                'api_key' => 'API Key',
                'api_key_note' => 'Generate <b>API key</b> from your <a target="_blank" href="https://mailchimp.com/"><b> Mailchimp account</b></a> and paste that in above text box.',
                'api_key_note_sendgrid' => 'Generate <b>API key</b> from your <a target="_blank" href="https://sendgrid.com/"><b> SendGrid account</b></a> and paste that in above text box.',
                'api_key_question' => 'How to generate API key?',
                'mailchimp' => 'Mailchimp',
                'sendgrid' => 'SendGrid',
                'list_id' => 'List ID',
                'get_lists' => 'Get Lists',
                'manage_lists' => 'Manage SendGrid Lists',
                'select_list' => 'Select List',
                'sendgrid_lists' => 'SendGrid Email Lists',
                'create_new' => 'Create and Select New',
                'list_id_question' => 'How to find List ID from Mailchimp?',
                'list_id_question_sendgrid' => 'Create new Email list for SendGrid Here.',
                'list_id_note' => 'Find and paste <b>List ID</b> in above box',
                'double_opt_in' => 'Double Opt-in',
                'double_opt_in_note' => '<b>On</b> = User will be asked in mail to opt in for subscription. <b>Off</b> = User will be directly subscribed for newsletter ',
            ],
            'general' => [
                'title' => 'General'
            ],
            'layout' => [
                'title' => 'Layout'
            ],
            'email' => [
                'title' => 'Mail Configuration',
                'mail_driver' => 'Mail Driver',
                'mail_driver_note' => 'You can select any driver you want for your Mail setup. <b>Ex. SMTP, Mailgun, Mandrill, SparkPost, Amazon SES etc.</b><br> Add <b>single driver only</b>.',
                'mail_from_name' => 'Mail From Name',
                'mail_from_name_note' => 'This will be display name for your sent email.',
                'mail_from_address' => 'Mail From Address',
                'mail_from_address_note' => 'This email will be used for "Contact Form" correspondence.',
                'mail_host' => 'Mail HOST',
                'mail_port' => 'Mail PORT',
                'mail_username' => 'Mail Username',
                'mail_username_note' => 'Add your email id you want to configure for sending emails',
                'mail_password_note' => 'Add your email password you want to configure for sending emails',
                'mail_password' => 'Mail Password',
                'mail_encryption' => 'Mail Encryption',
                'mail_encryption_note' => 'Use <b>tls</b> if your site uses <b>HTTP</b> protocol and <b>ssl</b> if you site uses <b>HTTPS</b> protocol',
                'note' => '<b>Important Note</b> : IF you are using <b>GMAIL</b> for Mail configuration, make sure you have completed following process before updating:
 <ul>
<li>Go to <a target="_blank" href="https://myaccount.google.com/security">My Account</a> from your Google Account you want to configure and Login</li>
<li>Scroll down to <b>Less secure app access</b> and set it <b>ON</b></li>
</ul>'
            ],

            'logos' => [
                'title' => 'Logos'
            ],
            'footer' => [
                'title' => 'Footer',
                'short_description' => 'Short Description',
                'section_1' => 'Section 1',
                'section_2' => 'Section 2',
                'section_3' => 'Section 3',
                'popular_courses' => 'Popular courses',
                'featured_courses' => 'Featured courses',
                'trending_courses' => 'Trending courses',
                'popular_categories' => 'Popular categories',
                'recent_news' => 'Recent News',
                'custom_links' => 'Custom Links',
                'social_links' => 'Social Links',
                'social_links_note' => 'Add social link URL and select Icon for that media from iconpicker. Click on <b>ADD +</b> button. And your social link will be created. You can also delete them by clicking on <b><i class="fa fa-times"></i></b> button',
                'newsletter_form' => 'Newsletter Form',
                'bottom_footer' => 'Bottom Footer',
                'bottom_footer_note' => 'Note : it includes Copyright text and Footer links',
                'copyright_text' => 'Copyright Text',
                'footer_links' => 'Footer Links',
                'link' => 'Link',
                'link_label' => 'Label',
                'link_url' => 'URL',
            ],
        ],


        'hero_slider' => [
            'title' => 'Hero Slider',
            'on' => 'On',
            'off' => 'Off',
            'create' => 'Create Slide',
            'edit' => 'Edit Slide',
            'view' => 'View Slides',
            'note' => 'Note: Please upload .jpg or .png in <b>1920x900</b> resolution for best result. Use darker or Overlayed images for better result.',
            'manage_sequence' => 'Manage Sequence of Slides',
            'sequence_note' => 'Drag and change sequence of a Slide',
            'save_sequence' => 'Save Sequence',

            'fields' => [
                'name' => 'Name',
                'bg_image' => 'BG Image',
                'hero_text' => 'Hero Text',
                'sub_text' => 'Sub Text',
                'overlay' => [
                    'title' => 'Overlay',
                    'note' => 'If you turn it on. A black overlay will be displayed on your image. It will be helpful when BG image is not darker or does not have Overlay'
                ],
                'widget' => [
                    'title' => 'Widget',
                    'select_widget' => 'Select Widget',
                    'search_bar' => 'Search Bar',
                    'countdown_timer' => 'Countdown Timer',
                    'input_date_time' => 'Input date and time'
                ],
                'buttons' => [
                    'title' => 'Buttons',
                    'name' => 'Button',
                    'add' => 'Add',
                    'label' => 'Label',
                    'link' => 'Link',
                    'placeholder' => 'Add number of buttons you want to add',
                    'note' => 'Note: Maximum 4 buttons can be added. Please add label and link for the button for redirecting action when button is clicked.'
                ],
                'sequence' => 'Sequence',
                'status' => 'Status'
            ],
        ],
        'social_settings' => [
            'management' => 'Social Settings',
        ],
        'sponsors' => [
            'title' => 'Sponsors',
            'create' => 'Create Sponsors',
            'edit' => 'Edit Sponsors',
            'view' => 'View Sponsors',
            'fields' => [
                'name' => 'Name',
                'logo' => 'Logo',
                'link' => 'Link',
                'status' => 'Status',
            ]
        ],
        'testimonials' => [
            'title' => 'Testimonials',
            'create' => 'Create Testimonial',
            'edit' => 'Edit Testimonial',
            'view' => 'View Testimonials',
            'fields' => [
                'name' => 'Name',
                'occupation' => 'Occupation',
                'content' => 'Content',
                'status' => 'Status',
            ]
        ],
        'blogs' => [
            'title' => 'Blog',
            'create' => 'Create Blog',
            'edit' => 'Edit Blog',
            'view' => 'View Blogs',
            'max_file_size' => '(max file size 10MB)',

            'fields' => [
                'title' => 'Title',
                'slug' => 'Slug',
                'content' => 'Content',
                'status' => 'Status',
                'views' => 'Views',
                'category' => 'Category',
                'created' => 'Created',
                'comments' => 'Comments',
                'tags' => 'Tags',
                'tags_placeholder' => 'Add tags here',
                'publish' => 'Publish',
                'clear' => 'Clear',
                'meta_title' => 'Meta Title',
                'meta_description' => 'Meta Description',
                'meta_keywords' => 'Meta Keywords',
                'featured_image' => 'Featured image',
                'created_at' => 'Created On',
            ]
        ],
        'pages' => [
            'title' => 'Pages',
            'create' => 'Create Page',
            'edit' => 'Edit Page',
            'view' => 'View Pages',
            'max_file_size' => '(max file size 10MB)',

            'fields' => [
                'title' => 'Title',
                'slug' => 'Slug',
                'content' => 'Content',
                'status' => 'Status',
                'created' => 'Created',
                'published' => 'Published',
                'drafted' => 'Drafted',
                'clear' => 'Clear',
                'featured_image' => 'Featured image',
                'meta_title' => 'Meta Title',
                'meta_description' => 'Meta Description',
                'meta_keywords' => 'Meta Keywords',
                'created_at' => 'Created On',
            ]
        ],

        'reviews' => [
            'title' => 'Reviews',

            'fields' => [
                'course' => 'Course',
                'user' => 'User',
                'content' => 'Content',
                'time' => 'Time',
            ],

        ],

        'faqs' => [
            'title' => 'FAQs',
            'create' => 'Create FAQ',
            'edit' => 'Edit FAQ',
            'view' => 'View FAQs',
            'fields' => [
                'category' => 'Category',
                'question' => 'Question',
                'answer' => 'Answer',
                'status' => 'Status',
            ]
        ],

        'logo' => [
            'title' => 'Change Logo',
            'logo_b' => 'Logo 1',
            'logo_b_note' => 'Note : Upload logo with <b>black text and transparent background in .png format</b> and <b>294x50</b> pixels',
            'logo_w' => 'Logo 2',
            'logo_w_note' => 'Note : Upload logo with <b>white text and transparent background in .png format</b> and <b>294x50</b> pixels',
            'logo_white' => 'Logo 3',
            'logo_white_note' => 'Note : Upload logo with <b>only in white text and transparent background in .png format</b> and <b>294x50</b> pixels',
            'logo_popup' => 'Logo for Popups',
            'logo_popup_note' => 'Note : Add square logo minimum resolution <b>72x72</b> pixels',
            'favicon' => 'Add Favicon',
            'favicon_note' => 'Note : Upload logo with resolution <b>32x32</b> pixels and extension <b>.png</b> or <b>.gif</b> or <b>.ico</b>',
        ],
        'reasons' => [
            'title' => 'Reasons',
            'create' => 'Create Reason',
            'edit' => 'Edit Reason',
            'view' => 'View Reasons',
            'fields' => [
                'title' => 'Title',
                'icon' => 'Icon',
                'content' => 'Content',
                'status' => 'Status',
            ]
        ],
        'contacts' => [
            'title' => 'Contacts',
            'fields' => [
                'name' => 'Name',
                'email' => 'Email',
                'phone' => 'Phone',
                'message' => 'Message',
                'time' => 'Time',
            ]
        ],
        /*======================================================*/
    ],

    'frontend' => [
        'badges' => [
            'trending' => 'Trending'
        ],

        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'title' => 'Contact',
            'button' => 'Send Information',
            'send_us_a_message' => 'Send Us A<span> Message.</span>',
            'keep_in_touch' => 'Keep<span> In Touch.</span>',
            'your_name' => 'Your Name',
            'your_email' => 'Your Email',
            'phone_number' => 'Phone Number',
            'message' => 'Message',
            'send_email' => 'Send Email',
            'send_message_now' => 'Send Message Now'
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],
        /* new added custom content*/
        'blog' => [
            'title' => 'Blog',
            'blog_categories' => 'Blog <span>Categories.</span>',
            'popular_tags' => 'Popular <span>Tags.</span>',
            'featured_course' => 'Featured <span>Course.</span>',
            'share_this_news' => 'Share this news',
            'related_news' => '<span>Related</span> News',
            'post_comments' => 'Post <span>Comments.</span>',
            'write_a_comment' => 'Write a Comment',
            'add_comment' => 'Add Comment',
            'login_to_post_comment' => 'Login to Post a Comment',
            'by' => 'By',
            'search_blog' => 'Search Blog',
            'no_comments_yet' => 'No comments yet, Be the first to comment.',
        ],
        'cart' => [
            'cart' => 'Cart',
            'checkout' => 'Checkout',
            'your_shopping_cart' => 'Your Shopping Cart',
            'complete_your_purchases' => 'Complete<span> Your Purchases.</span>',
            'order_item' => 'Order <span>Item.</span>',
            'course_name' => 'Course Name',
            'course_type' => 'Course Type',
            'starts' => 'Starts',
            'empty_cart' => 'Your cart is empty',
            'order_payment' => 'Order <span>Payment.</span>',
            'payment_cards' => 'Credit or Debit Card',
            'name_on_card' => 'Name on Card',
            'name_on_card_placeholder' => 'Enter the name written on your card',
            'card_number' => 'Card Number',
            'card_number_placeholder' => 'Enter your card number',
            'cvv' => 'CVV',
            'expiration_date' => 'Expiration Date',
            'mm' => 'MM',
            'yy' => 'YY',
            'pay_now' => 'Pay Now',
            'stripe_error_message' => 'Please correct the errors and try again.',
            'paypal' => 'PayPal',
            'pay_securely_paypal' => 'Pay securely with PayPal',
            'offline_payment' => 'Offline Payment',
            'offline_payment_note' => 'In this payment method our executives will contact you and give you instructions regarding payment and course purchase.',
            'request_assistance' => 'Request Assistance',
            'confirmation_note' => 'By confirming this purchase, I agree to the <b>Term of Use, Refund Policy</b> and <b>Privacy Policy</b>',
            'order_detail' => 'Order <span>Detail.</span>',
            'total' => 'Total',
            'payment_status' => 'Payment Status',
            'your_payment_status' => 'Your <span>Payment Status.</span>',
            'success_message' => 'Congratulations. Enjoy your course',
            'see_more_courses' => 'See More Courses',
            'go_back_to_cart' => 'Go back to Cart',
        ],
        'course'=>[
            'title' => 'Course',
            'courses' => 'Courses',
            'course_details' => '<span>Course Details.</span>',
            'course_detail' => 'Course Details',
            'course_timeline' => 'Course <b>Timeline:</b>',
            'test' => 'Test',
            'completed' => 'Completed',
            'go' => 'Go',
            'course_reviews' => 'Course <span>Reviews:</span>',
            'average_rating' => 'Average Rating',
            'ratings' => 'Ratings',
            'details' => 'Details',
            'stars' => 'Stars',
            'by' => 'By',
            'no_reviews_yet' => 'No reviews yet.',
            'add_reviews' => 'Add <span>Reviews.</span>',
            'your_rating' => 'Your Rating',
            'message' => 'Message',
            'add_review_now' => 'Add Review Now',
            'price' => 'Price',
            'added_to_cart' => 'Added To Cart',
            'add_to_cart' => 'Add To Cart',
            'buy_now' => 'Buy Now',
            'buy_note' => 'Only Students Can Buy Course',
            'continue_course' => 'Continue Course',
            'enrolled' => 'Enrolled',
            'chapters' => 'Chapters',
            'category' => 'Category',
            'author' => 'Author',
            'recent_news' => '<span>Recent  </span>News.',
            'view_all_news' => 'View All News',
            'featured_course' => '<span>Featured</span> Course.',
            'sort_by' => '<b>Sort</b> By',
            'popular' => 'Popular',
            'none' => 'None',
            'trending' => 'Trending',
            'featured' => 'Featured',
            'students' => 'Students',
            'course_name' => 'Course Name',
            'course_type' => 'Course Type',
            'starts' => 'Starts',
            'full_text' => 'FULL TEXT',
            'find_courses' => 'FIND COURSES',
            'your_test_score' => 'Your Test Score',
            'give_test_again' => 'Give Test Again',
            'submit_results' => 'Submit Results',
            'chapter_videos' => 'Chapter Videos',
            'download_files' => 'Download Files',
            'find_your_course' => '<span>Find </span>Your Course.',
            'mb' => 'MB',
            'prev' => 'PREV',
            'next' => 'NEXT',
            'progress' => 'Progress',
        ],
        'modal'=>[
            'my_account' => 'My Account',
            'login_register' => '<a href="#" class="font-weight-bold go-login px-0">LOGIN</a> to our website, or <a href="#" class="font-weight-bold go-register px-0" id="">REGISTER</a>',
            'new_user_note' => 'New User? Register Here',
            'already_user_note' => 'Already a user? Login Here',
            'login_now' => 'LogIn Now',
            'register_now' => 'Register Now',
            'registration_message' => 'Registration Successful. Please LogIn'
        ],
        'layouts' =>[
            'partials' =>[
                'search_our_courses' => 'SEARCH OUR COURSES',
                'browse_featured_course' => 'Browse Our<span> Featured Course.</span>',
                'course_detail' => 'Course detail',
                'students' => 'Students',
                'contact_us' => 'Contact Us',
                'get_in_touch' => 'Get In Touch',
                'primary' => 'Primary',
                'second' => 'Second',
                'courses_categories' => 'Courses Categories',
                'browse_course_by_category' => 'Browse Courses<span> By Category.</span>',
                'faq' => 'FAQ',
                'faq_full' => 'Frequently<span> Asked Questions</span>',
                'social_network' => 'Social Network',
                'subscribe_newsletter' => 'Subscribe Newsletter',
                'subscribe_now' => 'Subscribe Now',
                'email_address' => 'Email Address',
                'latest_news_blog' => 'Latest <span>News Blog.</span>',
                'trending_courses' => 'Trending <span>Courses.</span>',
                'popular_courses' => 'Popular <span>Courses.</span>',
                'view_all_news' => 'View All News',
                'view_all_trending_courses' => 'View All Trending Courses',
                'view_all_popular_courses' => 'View All Popular Courses',
                'learn_new_skills' => 'Learn new skills',
                'recent_news' => '<span>Recent  </span>News.',
                'featured_course' => '<span>Featured  </span>Course.',
                'days' => 'Days',
                'hours' => 'Hours',
                'minutes' => 'Minutes',
                'seconds' => 'Seconds',
                'search_courses' => 'Search Courses',
                'search_placeholder' => 'Type what do you want to learn today?',
                'sponsors' => 'Sponsors.',
                'advantages' => 'Advantages',
                'students_testimonial' => 'Students <span>Testimonial.</span>',
                'why_choose' => 'Reason <span>Why Choose '.env('APP_NAME'),
                'email_registration' => 'Email Us For Free Registration',
                'call_us_registration' => 'Call Us For Free Registration',
            ]
        ],
        'search_result'=>[
            'blog' => 'Blog',
            'search_blog' => 'Search Blog',
            'sort_by' => '<b>Sort</b> By',
            'popular' => 'Popular',
            'none' => 'None',
            'trending' => 'Trending',
            'featured' => 'Featured',
            'course_name' => 'Course Name',
            'course_type' => 'Course Type',
            'starts' => 'Starts',
            'course_detail' => 'Course Detail',
            'students' => 'Students',
        ],
        'teacher' => [
            'title' => 'Teachers',
            'courses_by_teacher' => 'Courses <span>By Teacher.</span>',
            'course_detail' => 'Course Detail',
            'students' => 'Students',
            'send_now' => 'Send Now',
        ],
        'faq' => [
            'title' => 'Frequently <span>Asked Questions</span>',
            'find' => 'Find <span>Your Questions & Answers.</span>',
            'make_question' => 'Make Question',
            'contact_us' => 'Contact Us',
        ],
        'home' => [
            'title' => 'Home',
            'learn_new_skills' => 'Learn new skills',
            'search_course' => 'Search Course',
            'search_course_placeholder' => 'Type what do you want to learn today?',
            'search_courses' => '<span>Search</span> '.env('APP_NAME').' Courses.',
            'students_enrolled' => 'Students Enrolled',
            'online_available_courses' => 'Online Available Courses',
            'teachers' => 'Teachers',
            'our_professionals' => 'Our Professionals',
            'all_teachers' => 'All Teachers',
            'what_they_say_about_us' => 'What they say about us',
            'popular_teachers' => '<span>Popular</span> Teachers',
        ]


    ],
];
