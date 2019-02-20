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

    'general' => [
        'all'     => 'All',
        'yes'     => 'Yes',
        'no'      => 'No',
        'trash'      => 'Trash',
        'copyright' => 'Copyright',
        'delete_selected' => 'Delete Selected',
        'custom'  => 'Custom',
        'actions' => 'Actions',
        'active'  => 'Active',
        'buttons' => [
            'save'   => 'Save',
            'update' => 'Update',
        ],
        'hide'              => 'Hide',
        'inactive'          => 'Inactive',
        'none'              => 'None',
        'show'              => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new'        => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more'              => 'More',
        'sr_no'              => 'Sr No.',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create'     => 'Create Role',
                'edit'       => 'Edit Role',
                'management' => 'Role Management',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions'     => 'Permissions',
                    'role'            => 'Role',
                    'sort'            => 'Sort',
                    'total'           => 'role total|roles total',
                ],
            ],

            'users' => [
                'active'              => 'Active Users',
                'all_permissions'     => 'All Permissions',
                'change_password'     => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create'              => 'Create User',
                'deactivated'         => 'Deactivated Users',
                'deleted'             => 'Deleted Users',
                'edit'                => 'Edit User',
                'management'          => 'User Management',
                'no_permissions'      => 'No Permissions',
                'no_roles'            => 'No Roles to set.',
                'permissions'         => 'Permissions',
                'user_actions'        => 'User Actions',

                'table' => [
                    'confirmed'      => 'Confirmed',
                    'created'        => 'Created',
                    'email'          => 'E-mail',
                    'id'             => 'ID',
                    'last_updated'   => 'Last Updated',
                    'name'           => 'Name',
                    'first_name'     => 'First Name',
                    'last_name'      => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted'     => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions'    => 'Permissions',
                    'abilities'      => 'Abilities',
                    'roles'          => 'Roles',
                    'social'         => 'Social',

                    'status'         => 'Status',/*=== Custom String ===*/

                    'total'          => 'user total|users total',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history'  => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar'       => 'Avatar',
                            'confirmed'    => 'Confirmed',
                            'created_at'   => 'Created At',
                            'deleted_at'   => 'Deleted At',
                            'email'        => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name'         => 'Name',
                            'first_name'   => 'First Name',
                            'last_name'    => 'Last Name',
                            'status'       => 'Status',
                            'timezone'     => 'Timezone',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],

        ],
        /*====================Custom strings====================*/
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
        'courses' =>[
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
            'lesson' => 'lesson',

            'fields' => [
                'teachers' => 'Teachers',
                'lessons' => [
                  'add' => 'Add Lessons',
                  'view' => 'View Lessons'
                ],
                'course' => 'Course',
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
                'published' => 'Published'
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
            'max_file_size' => '(max file size 10MB)',
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

        'messages' => [
            'title' => 'Messages'
        ],
        'general_settings' => [
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

            'contact'=>[
                'title' => 'Contact',
                'primary_address' => 'Primary Address',
                'secondary_address' => 'Secondary Address',
                'primary_email' => 'Primary Email',
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
            'general'=>[
                'title' => 'General'
            ],
            'layout'=>[
                'title' => 'Layout'
            ],
            'logos'=>[
                'title' => 'Logos'
            ],
            'footer'=>[
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
            'title' => 'Blogs',
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
                'featured_image' => 'Featured image',
                'created_at' => 'Created On',
            ]
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
            'logo_b_note' =>'Note : Upload logo with <b>black text and transparent background in .png format</b> and <b>294x50</b> pixels',
            'logo_w' => 'Logo 2',
            'logo_w_note' =>'Note : Upload logo with <b>white text and transparent background in .png format</b> and <b>294x50</b> pixels',
            'logo_white' => 'Logo 3',
            'logo_white_note' =>'Note : Upload logo with <b>only in white text and transparent background in .png format</b> and <b>294x50</b> pixels',
            'logo_popup' => 'Logo for Popups',
            'logo_popup_note' => 'Note : Add square logo minimum resolution <b>72x72</b> pixels',
            'favicon' => 'Add Favicon',
            'favicon_note' =>'Note : Upload logo with resolution <b>32x32</b> pixels and extension <b>.png</b> or <b>.gif</b> or <b>.ico</b>',
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
        /*======================================================*/
    ],

    'frontend' => [

        'auth' => [
            'login_box_title'    => 'Login',
            'login_button'       => 'Login',
            'login_with'         => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button'    => 'Register',
            'remember_me'        => 'Remember Me',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password'                 => 'Forgot Your Password?',
            'reset_password_box_title'        => 'Reset Password',
            'reset_password_button'           => 'Reset Password',
            'update_password_button'           => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar'             => 'Avatar',
                'created_at'         => 'Created At',
                'edit_information'   => 'Edit Information',
                'email'              => 'E-mail',
                'last_updated'       => 'Last Updated',
                'name'               => 'Name',
                'first_name'         => 'First Name',
                'last_name'          => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],

    ],
];
