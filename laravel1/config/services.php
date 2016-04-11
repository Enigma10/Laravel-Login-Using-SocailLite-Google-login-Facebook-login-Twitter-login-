<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
    'google' => [
    'client_id' => '858707023230-v7ascev41rq5c504qqdcvc8dhde6pao4.apps.googleusercontent.com',
    'client_secret' => 'Jr0YeY7NM8P4R6ZhoShyXNJY',
    'redirect' => 'http://localhost:8000/callback/google',
],

    'twitter' => [
    'client_id' => 'yb7hhBNvN8yfExpnM7r3Qs40A',
    'client_secret' => 'a5KC8LBmbE1hQmn9c58JrmHRk8y1pSDs3kzcRUKRN2shlnj2XN',
    'redirect' => 'http://localhost:8000/callback/twitter',
],

     'facebook' => [
    'client_id' => '1046936292038184',
    'client_secret' => 'c52c3422de5855b9801312e97c5e6d77',
   'redirect' => 'http://localhost:8000/callback/facebook',
    ],

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

];
