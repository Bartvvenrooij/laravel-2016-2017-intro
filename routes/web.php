<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', "IndexController@index")->name('index');




Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('article', "ArticleController", ['except' => ['index', 'show']]);
});

Route::resource('article', "ArticleController", ['only' => ['index', 'show']]);
Route::post('article/search', "ArticleController@search")->name('article.search');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::get('logout', 'Auth\LoginController@logout')->name('auth.logout');
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('auth.register');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.reset.form');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.reset');
