<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index');
    Route::get('/events', 'EventsController@index');
    
    // Admin Pages

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('events/{event}', [
        'middleware' => 'auth',
        'uses' => 'EventsController@show'
    ]);
    Route::get('events/add', [
        'middleware' => 'auth',
        'uses' => 'EventsController@addEvent'
    ]);
    Route::post('events/{event}/charities',[
        'middleware' => 'auth',
        'uses' => 'CharitiesController@store'
     ]);
    Route::get('charities/{charity}/edit', [
        'middleware' => 'auth',
        'uses' => 'CharitiesController@edit'
    ]);
    Route::get('charities/{charity}/delete', 'CharitiesController@delete');

});
