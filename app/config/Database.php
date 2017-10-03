<?php
    return array (
        /** Active driver */
        'driver' => 'mysql',

        /** Default options */
        'default' => array (
            'prefix'    => '',
            'host'      => 'localhost',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ),

        /** Local connection */
        'local' => array (
            'mysql' => array (
                'database'  => '',
                'username'  => '',
                'password'  => ''
            )
        ),

        /** Production connection */
        'production' => array (
            'mysql' => array (
                'database'  => '',
                'username'  => '',
                'password'  => ''
            )
        )
    );