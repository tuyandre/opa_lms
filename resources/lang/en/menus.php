<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Access',

            'roles' => [
                'all'        => 'All Roles',
                'create'     => 'Create Role',
                'edit'       => 'Edit Role',
                'management' => 'Role Management',
                'main'       => 'Roles',
            ],

            'users' => [
                'all'             => 'All Users',
                'change-password' => 'Change Password',
                'create'          => 'Create User',
                'deactivated'     => 'Deactivated Users',
                'deleted'         => 'Deleted Users',
                'edit'            => 'Edit User',
                'main'            => 'Users',
                'view'            => 'View User',
            ],
        ],

        'log-viewer' => [
            'main'      => 'Log Viewer',
            'dashboard' => 'Dashboard',
            'logs'      => 'Logs',
        ],

        'sidebar' => [
            'dashboard' => 'Dashboard',
            'general'   => 'General',
            'history'   => 'History',
            'system'    => 'System',


            /*=====Custom content========*/
            'courses'    => [
                'title' => 'Courses',
                'management' => 'Courses Management',
                'manage' => 'Manage Courses',
            ],
            'lessons'    => [
                'title' => 'Lessons'
            ],
            'questions'    => [
                'title' => 'Questions'
            ],
            'questions-options'    => [
                'title' => 'Questions Options'
            ],
            'tests'    => [
                'title' => 'Tests'
            ],
            'change-password'    => [
                'title' => 'Change Password'
            ],
            'account'    => [
                'title' => 'Account'
            ],
            'messages'    => [
                'title' => 'Messages'
            ],
            'orders'    => [
                'title' => 'Orders'
            ],
            'categories'    => [
                'title' => 'Categories'
            ],
            'teachers'    => [
                'title' => 'Teachers'
            ],
            'settings'    => [
                'title' => 'Settings',
                'general' => 'General',
                'social-login' => 'Social Login'
            ],
            'hero-slider'    => [
                'title' => 'Hero Slider',
            ],
            'sponsors'    => [
                'title' => 'Sponsors',
            ],
            'testimonials'    => [
                'title' => 'Testimonials',
            ],
            'blogs'    => [
                'title' => 'Blog',
            ],
            'faqs'    => [
                'title' => 'FAQs',
            ],
            'reasons'    => [
                'title' => 'Reasons',
            ],
            'site-management'    => [
                'title' => 'Site Management',
            ],
            'contact'    => [
                'title' => 'Contact',
            ],
            'footer'    => [
                'title' => 'Footer',
            ],
            'debug-site'    => [
                'title' => 'Debug Site',
            ],
            'newsletter-configuration'    => [
                'title' => 'Newsletter Configuration',
            ],
            'invoices'    => [
                'title' => 'Invoices',
            ],
            'menu-manager' => [
                'title' => 'Menu Manager',
            ],
            'contacts' => [
                'title' => 'Contacts',
            ],
            'pages' => [
                'title' => 'Pages Manager',
            ],
            'reviews' => [
                'title' => 'Reviews',
            ],
            /*===========================*/
        ],
    ],

    'language-picker' => [
        'language' => 'Language',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'ar'    => 'Arabic',
            'zh'    => 'Chinese Simplified',
            'zh-TW' => 'Chinese Traditional',
            'da'    => 'Danish',
            'de'    => 'German',
            'el'    => 'Greek',
            'en'    => 'English',
            'es'    => 'Spanish',
            'fa'    => 'Persian',
            'fr'    => 'French',
            'he'    => 'Hebrew',
            'id'    => 'Indonesian',
            'it'    => 'Italian',
            'ja'    => 'Japanese',
            'nl'    => 'Dutch',
            'no'    => 'Norwegian',
            'pt_BR' => 'Brazilian Portuguese',
            'ru'    => 'Russian',
            'sv'    => 'Swedish',
            'th'    => 'Thai',
            'tr'    => 'Turkish',
        ],
    ],
];
