<?php

return [

    /*
    |--------------------------------------------------------------------------
    | General Info
    |--------------------------------------------------------------------------
    |
    | Customizes the app name and copyright information
    |
    */
    'app_name' => 'Laravel Dashboard',
    'company' => 'Acme',
    'copyright_year' => '2018',

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | Applies the specified middleware
    |
    */
    'middleware' => [
        'web', 'auth'
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard Skin
    |--------------------------------------------------------------------------
    |
    | Customizes the skin of the dashboard templates
    |
    | Acceptable Skin Values: 
    |   black, black-light, blue, blue-light, green, green-light
    |   purple, purple-light, red, red-light, yellow, yellow-light
    |
    */
    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Dashboard Layout
    |--------------------------------------------------------------------------
    |
    | Customizes the layout of the dashboard
    |
    | Acceptable Layout Values: 
    |   fixed, layout-boxed, layout-top-nav, sidebar-collapse, sidebar-mini
    |
    */
    'layout' => 'sidebar-mini',

    /*
    |--------------------------------------------------------------------------
    | jQuery Dependency
    |--------------------------------------------------------------------------
    |
    | Specifies the location of jQuery
    |
    */
    'jquery' => 'vendor/dashboard/js/jquery.min.js',

    /*
    |--------------------------------------------------------------------------
    | Bootstrap Dependency
    |--------------------------------------------------------------------------
    |
    | Specifies the location of jQuery
    |
    */
    'bootstrap-css' => 'vendor/dashboard/css/bootstrap.min.css',
    'bootstrap-js' => 'vendor/dashboard/css/bootstrap.min.js',

    /*
    |--------------------------------------------------------------------------
    | Font Awesome Dependency
    |--------------------------------------------------------------------------
    |
    | Specifies the location of Font Awesome
    |
    */
    'font-awesome' => 'vendor/dashboard/css/font-awesome.min.css',

    /*
    |--------------------------------------------------------------------------
    | Ion Icons Dependency
    |--------------------------------------------------------------------------
    |
    | Specifies the location of Ion Icons
    |
    */
    'ion-icons' => 'vendor/dashboard/css/ionicons.min.css',

    'scripts' => [
        'local' => [
            'js/manifest.js'
        ],
        'head' => [

        ],
        'footer' => [
            'vendor/dashboard/js/jquery.min.js',
            'vendor/dashboard/js/bootstrap.min.js',
            'vendor/dashboard/js/adminlte.min.js',
            'vendor/dashboard/js/jquery.sparkline.min.js',
            'js/vendor.js',
            'js/app.js'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    |
    | Support for messages
    |
    */
    'messages' => [
        'supported' => true,
        'message_field' => 'message',
        'routes' => [
            'show' => 'messages'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    |
    | Support for notifications
    |
    */
    'notifications' => [
        'supported' => true,
        'message_field' => 'message',
        'routes' => [
            'show' => 'notifications'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Tasks
    |--------------------------------------------------------------------------
    |
    | Support for tasks
    |
    */
    'tasks' => [
        'supported' => true,
        'routes' => [
            'show' => 'tasks'
        ]
    ]

];
