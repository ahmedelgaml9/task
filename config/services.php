<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],


'facebook' => [
    'client_id' => '835595309920900
',
    'client_secret' => 'fdba9f7080fe81777d2b4de197f9f016',
    'redirect' => 'http://127.0.0.1:8000/auth/facebook/callback',
],

'google' => [

   'client_id' => '379941718330-ffnndi49ret55tsmhsrmbmq3dqdim8jt.apps.googleusercontent.com',
   'client_secret' => '7_fdfgmOQVFYjTifkJMnZ-dk',
    'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

];
