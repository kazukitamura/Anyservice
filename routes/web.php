<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('user/explanation', 'Admin\UserController@explanation');
    Route::get('user/category', 'Admin\UserController@category');
    Route::get('user/contact', 'Admin\UserController@contact');
    Route::get('partner/partner', 'Admin\PartnerController@partner');
});

Route::get('posts', 'PostsController@index');
Route::post('posts', 'PostsController@store');