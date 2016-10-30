<?php

/*
|--------------------------------------------------------------------------
| Webルート
|--------------------------------------------------------------------------
|
| このファイルはアプリケーションで処理するすべてのルートを定義する場所です。
| クロージャやコントローラメソッドを使用し、レスポンスすべきURIを
| Laravelへ指示するだけです。素晴らしい物を作ってください！
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});


//Twitter
Route::get('auth/login/twitter', 'Auth\SocialController@getTwitterAuth');
Route::get('auth/login/callback/twitter', 'Auth\SocialController@getTwitterAuthCallback');

//Facebook
Route::get('auth/login/facebook', 'Auth\SocialController@getFacebookAuth');
Route::get('auth/login/callback/facebook', 'Auth\SocialController@getFacebookAuthCallback');

//Google
// Route::get('auth/login/google', 'Auth\SocialController@getGoogleAuth');
// Route::get('auth/login/callback/google', 'Auth\SocialController@getGoogleAuthCallback');
