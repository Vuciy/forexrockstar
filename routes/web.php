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

  Route::get('/', 'HomeController@index')->name('landing');

Auth::routes();
Route::get('/pagenotfound', ['as' => 'notfound', 'uses' => 'HomeController@pageNotFound']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/videos-section', 'VideosController@index')->name('videos');
Route::post('videos-upload', 'VideosController@store');
Route::get('/about', 'AboutController@index')->name('about');
Route::any('testimonial-get', 'TestimonialController@store');
Route::post('testimonial-post', 'TestimonialController@store');
Route::post('remove-admin-post', 'AdminController@removeAdmin');
Route::post('add-admin-post', 'AdminController@store');
Route::post('testimonial-destroy', 'TestimonialController@destroy');
Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');
Route::get('/contacts', 'ContactsController@index')->name('contacts');

/* -------- Payment Pages ------- */
Route::get('/thank-you/{id}', 'ThankYouController@index');
Route::get('/cancelled-transction/{id}', 'CancelTransictionController@index');
/* -------- Admin Auth ------- */

/* -------- Mailer ------- */
Route::post('send-mail', 'MailController@send');

Route::GET('/admin/home', 'AdminController@index')->name('admin.home');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('Admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
