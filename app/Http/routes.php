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

Route::get('/courses/create', 'CoursesController@create');

Route::post('/courses/store', 'CoursesController@store');
//Route::get('users', function() {
//    return view('users')->with('users', \App\User::paginate(10));
//});
