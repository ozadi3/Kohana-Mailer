<?php defined('SYSPATH') or die('No direct script access.');

return array(
    // Sending method: smtp or mail
    'mode'  => 'smtp',

    // SMTP settings
    'smtp' => array(
        'host'      => '',
        'port'      => '',
        'username'  => '',
        'password'  => '',
    ),

    // Sender
    'from' => array(
        'mail' => 'no-reply@example.com',
        'name' => 'Example',
    ),
);