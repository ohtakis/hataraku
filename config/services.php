<?php

return [

    /*
    |--------------------------------------------------------------------------
    | サードパーティーサービス
    |--------------------------------------------------------------------------
    |
    | このファイルは、Stripe、Mailgun、Mandrillなどのサードパーティーサービスの
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | 様々な認証情報をパッケージから簡単に見つけられるように、この主のタイプの
    | 情報をまとめておくデフォルトの場所を用意するのは、筋が通っているでしょう。
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

    'twitter' => [
        'client_id'     => env('TWITTER_ID'),
        'client_secret' => env('TWITTER_SECRET'),
        'redirect'      => env('TWITTER_CALLBACKURL'),
    ],

    'facebook' => [
        'client_id'     => env('FACEBOOK_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect'      => env('FACEBOOK_CALLBACKURL'),
    ],

];
