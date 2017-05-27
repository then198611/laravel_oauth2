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
    return view('welcome');
});

Route::get('/profile',function (){
    return 1;
});

Route::group(['middleware' => ['web']], function () {

    Route::auth();
    Route::get('/', 'HomeController@index');



});

Route::group(['middleware' => ['web']],function(){
    Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'Admin\LoginController@login');
    Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('admin/register', 'Admin\RegisterController@register');
    Route::get('admin', 'Admin\IndexController@index')->name('admin.index');
});