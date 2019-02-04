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
            'create' => 'Create Categories',
            'edit' => 'Edit Categories',
            'view' => 'View Categories',
            'fields' => [
                'name' => 'Name',
                'image' => 'Image',
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
            'fields' => [
                'teachers' => 'Teachers',
                'lessons' => [
                  'add' => 'Add Lessons',
                  'view' => 'View Lessons'
                ],
                'course' => 'Course',
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
            'fields' => [
                'course' => 'Course',
                'title' => 'Title',
                'position' => 'Position',
                'free_lesson' => 'Free Lesson',
                'published' => 'Published',
                'lesson_image' => 'Lesson Image',
                'short_text' => 'Short Text',
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
        ],
        'social_settings' => [
            'management' => 'Social Settings',
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
