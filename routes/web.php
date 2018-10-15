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
    Route::any('home/login','HomeController@login');
});

//Route::any('login','HomeController@login');
Route::any('register','Admin\AdminController@register');
Route::any('info','Admin\UserController@info');
Route::any('my','Admin\BaseController@my');

