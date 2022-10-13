<?php

return [
    'transport' => [
        'type' => 'smtp',
        'host' => '', // Your SMTP Host
        'port' => 25, // Port: 25, 456, 587
        'security' => true, // True or False
        'auth' => true, // True or False
        'username' => '', // Your Username for the SMTP
        'password' => '', // Your Password for the SMTP
    ],
    'presets' => [
        'contact' => [
            'template' => 'email', // Name of your E-Mail Template
            'from'     => '', // E-Mail Address
            'replyTo'  => '', // E-Mail Address
            'to'       => '', // E-Mail Address
        ]
    ]
];