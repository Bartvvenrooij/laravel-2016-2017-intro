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

Route::get('/', "IndexController@index");

Route::get('/article', "ArticleController@index")->name('article.index');
Route::get('/article/create', "ArticleController@create")->name('article.create');
Route::get('/article/{article}', "ArticleController@show")->name('article.show');
Route::get('/article/{article}/edit', "ArticleController@edit")->name('article.edit');
Route::post('/article', "ArticleController@store")->name('article.store');
Route::patch('/article/{article}', "ArticleController@update")->name('article.update');

Route::get('/home', function () {
    return view('welcome');
});
