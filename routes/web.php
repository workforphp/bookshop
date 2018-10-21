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

Route::group(['prefix' => 'Admin', 'namespace' => 'Admin'], function (){
//    Route::any('home/login','HomeController@login');
//    Route::any('home/register','HomeController@register');
//    Route::any('home/forget-pwd','HomeController@forgetPwd');

    Route::group(['prefix' => 'home'], function(){
        Route::any('login','HomeController@login');
        Route::any('register','HomeController@register');
        Route::any('forget-pwd','HomeController@forgetPwd');
        Route::any('get-captcha/{tmp}', 'HomeController@getCaptcha');
        Route::any('check-login/', 'HomeController@checkLogin');
        Route::any('index/', 'HomeController@index');
    });

    Route::group(['prefix' => 'shop'], function (){
        Route::any('register', 'ShopController@register');
        Route::any('login', 'ShopController@login');
    });

    Route::group(['prefix' => 'admin'], function(){
        Route::any('index', 'AdminController@index');
    });

    Route::group(['prefix' => 'user'], function (){
        Route::any('get-info',"UserController@getInfo");
    });
});

////Route::any('login','HomeController@login');
//Route::any('register','Admin\AdminController@register');
//Route::any('info','Admin\UserController@info');
//Route::any('my','Admin\BaseController@my');
//Route::any('register','Admin\AdminController@register');
//Route::any('info','Admin\UserController@info');
//Route::any('my','Admin\BaseController@my');