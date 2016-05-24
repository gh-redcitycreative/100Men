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
    
    // Members 
    Route::get('/home', 'HomeController@index');
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('charities/{charity}/voting', [
        'middleware' => 'admin',
        'uses' => 'VotesController@newVote'
     ]);

    

    // Admin
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/events', [
        'middleware' => 'auth',
        'uses' => 'EventsController@index'
    ]);
    Route::get('events/{event}', [
        'middleware' => 'auth',
        'uses' => 'EventsController@show'
    ]);
        Route::post('events/{event}/charities',[
        'middleware' => 'admin',
        'uses' => 'CharitiesController@store'
     ]);
    Route::get('events/add', [
        'middleware' => 'admin',
        'uses' => 'EventsController@addEvent'
    ]);
    Route::get('charities/{charity}/edit', [
        'middleware' => 'admin',
        'uses' => 'CharitiesController@edit'
    ]);
    Route::get('charities/{charity}/delete', [
        'middleware' => 'admin',
        'uses' => 'CharitiesController@delete'
    ]);

    Route::post('charities/{charity}/createVote', [
        'middleware' => 'admin',
        'uses' => 'VotesController@store'
     ]);
});
