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

Route::get('/home', 'HomeController@index')->middleware(['verified','web'])->name('home');
//Rutas para inicio de sesión, password reset, verify email
Route::middleware(['web'])->group(function(){
  Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('login', 'Auth\LoginController@login')->name('login.post');
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');

  //Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('register', 'Auth\RegisterController@register');

  //Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
  Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
  Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

  Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
  Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
  Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
});

//Rutas modulo Buildings
Route::middleware(['web','verified','auth'])->group(function(){
    Route::post('buildings/store', 'BuildingsController@store')->name('buildings.store');
    Route::post('buildings/disable', 'BuildingsController@disable')->name('buildings.disable');
    Route::post('buildings/activate', 'BuildingsController@activate')->name('buildings.activate');
    Route::post('buildings/delete', 'BuildingsController@destroy')->name('buildings.delete');

    Route::get('buildings', 'BuildingsController@index')->name('buildings.index');
    Route::get('buildings/create', 'BuildingsController@create')->name('buildings.create');
});
