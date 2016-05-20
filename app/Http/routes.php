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
    Route::get('/new-member', function () {
        return view('pages.new-member');
    });
    Route::get('/returning-member', function () {
        return view('pages.returning-member');
    });

    Route::get('/payment', function () {
        return view('pages.payment');
    });
    Route::get('/thank-you-checkin', function () {
        return view('pages.thank-you-checkin');
    });
    Route::get('/secret-code', function () {
        return view('pages.secret-code');
    });
    Route::get('/vote', function () {
        return view('pages.vote');
    });
    Route::get('/thank-you-vote', function () {
        return view('pages.thank-you-vote');
    });

    Route::get('/live-vote', function () {
        return view('pages.live-vote');
    });
    Route::get('/100-admin', function () {
        return view('pages.100-admin');
    });

    Route::get('/home', 'HomeController@index');

    Route::get('/events', 'EventsController@index');

    // Route::get('/create-event', function () {
    //     return view('pages.create-event');
    // });

    // Admin Pages

    Route::get('/create-event', ['middleware' => 'auth', function() {
    }]);

    Route::get('/report', ['middleware' => 'auth', function() {
    }]);

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
