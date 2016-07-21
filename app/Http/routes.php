<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stud','HomeController@student');
Route::get('student','HomeController@student');
Route::get('/courses','HomeController@show_courses');
Route::get('testi','HomeController@home');
Route::get('contact','HomeController@home');
Route::get('blog','HomeController@home');

Route::auth();

Route::get('/home', 'HomeController@index');
