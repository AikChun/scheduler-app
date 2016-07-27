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
        return redirect()->action('HomeController@index');
    }
    return view('auth.login');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/users', 'UsersController@index');

Route::resource('programmes', 'ProgrammesController');
Route::resource('programme-types', 'ProgrammeTypesController');
Route::resource('courses', 'CoursesController');
//Route::get('/programmes/', 'ProgrammesController@index');
//Route::get('/programmes/create', 'ProgrammesController@create');
//Route::post('/programmes/store', 'ProgrammesController@store');
