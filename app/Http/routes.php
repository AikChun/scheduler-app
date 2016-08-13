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
    if(Auth::user()) {
        return redirect()->action('HomeController@dashboard');
    }
    return view('auth.login');
});

Route::auth();

Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::post('/users/store', 'UsersController@store');
Route::get('/users/send_schedule/{user}', 'UsersController@send_schedule');

Route::resource('programmes', 'ProgrammesController');
Route::resource('programme-types', 'ProgrammeTypesController');
Route::resource('courses', 'CoursesController');
Route::resource('group_classes', 'GroupClassesController');
//Route::get('/programmes/', 'ProgrammesController@index');
//Route::get('/programmes/create', 'ProgrammesController@create');
//Route::post('/programmes/store', 'ProgrammesController@store');
