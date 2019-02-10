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
//Route::get('auth/login', function() {
//	return view('auth.login');
//});

//Route::get('/logout', function(){
//	return view('logout');
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('login', 'LoginController@login');
//Route::post('login', 'LoginController@login');
//Route::post('/logout', 'LoginController@logout');
//Route::get('register', 'RegisterController@showResetForm');
//Route::post('register', 'RegisterController@register');
//Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
//Route::get('password/reset', 'ForgotPasswordController@showLinkrequestForm');
//Route::post('password/reset', 'ResetPasswordController@reset');
//Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm');
//Route::get('home', 'LoginController@login');








