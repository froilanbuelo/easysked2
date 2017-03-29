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

Auth::routes();

Route::get('event_list', 'Api\EventController@index');

Route::get('/home/{view?}', 'HomeController@index');
// Route::get('/home_calendar', 'HomeController@index',['view'=>'calendar']);
Route::get('/google_login', 'GoogleAuthController@login')->name('google_login');
Route::resource('user', 'UserController');
Route::resource('appointment', 'AppointmentController');