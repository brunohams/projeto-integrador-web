<?php
    return array (
        /** Active driver */
        'driver' => 'mysql',

        /** Default options */
        'default' => array (
            'prefix'    => '',
            'host'      => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ),

        /** Local connection */
        'local' => array (
            'mysql' => array (
                'database'  => 'integrador',
                'username'  => 'root',
                'password'  => 'root'
            )
        ),

        /** Production connection */
        'production' => array (
            'mysql' => array (
                'database'  => 'integrador',
                'username'  => 'integrador',
                'password'  => 'presunto'
            )
        )
    );