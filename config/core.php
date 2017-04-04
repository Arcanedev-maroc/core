<?php

return [

    /* -----------------------------------------------------------------
     |  Database
     | -----------------------------------------------------------------
     */
    'database' => [
        'default'     => 'sqlite',

        'connections' => [
            'sqlite' => [
                'driver'   => 'sqlite',
                'database' => database_path('arcanesoft.sqlite'),
                'prefix'   => '',
            ],
        ],
    ],

    /* -----------------------------------------------------------------
     |  Admin
     | -----------------------------------------------------------------
     */
    'admin' => [
        'prefix'     => 'dashboard',

        'name'       => 'admin::',

        'middleware' => ['web', 'auth', 'admin'],

        'route'      => 'admin::', // TODO: deprecate this attribute
    ],

];
