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
    // Route::get('/home', 'HomeController@index');
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('home', [
        'middleware' => 'auth',
        'uses' => 'EventsController@current'
    ]);

    Route::get('api/tally-results', [
        'uses' => 'EventsController@tally'
    ]);

    Route::get('events/live-results', [
        'middleware' => 'admin',
        'uses' => 'EventsController@results'
    ]);


     Route::get('donate', [
        'middleware' => 'auth',
        'uses' => 'DonationController@donate'
    ]);

    Route::get('charities/{charity}/voting', [
        'middleware' => 'auth',
        'uses' => 'VotesController@newVote',
     ]);

    Route::post('events/{event}/check-in', [
        'middleware' => 'auth',
        'uses' => 'EventsController@checkIn'
 
     ]);

    // flash messages
     Route::get('voted', function()
     {
        Session::flash('status', 'Thanks for voting');
        return redirect('/home');
     });

    Route::get('checked-in', function()
     {
        Session::flash('status', 'Thank you for coming this evening!');
        return redirect('/home');
     });

    Route::get('new-event', function()
     {
        Session::flash('status', 'Your new event has been added.');
        return redirect('/events');
     });






    // Admin
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/events', [
        'middleware' => 'admin',
        'uses' => 'EventsController@index'
    ]);

    Route::get('/events/add', [
        'middleware' => 'admin',
        'uses' => 'EventsController@add'
    ]);

    Route::get('events/{event}', [
        'middleware' => 'auth',
        'uses' => 'EventsController@show'
    ]);

    Route::get('events/{event}/passcode', [
        'middleware' => 'admin',
        'uses' => 'EventsController@passcode'
    ]);

    Route::post('events/{event}/charities',[
        'middleware' => 'admin',
        'uses' => 'CharitiesController@store',
        'file' => 'true' 
     ]);
    Route::get('event/{event}/current',[
        'middleware' => 'admin',
        'uses' => 'EventsController@updateCurrent'
     ]);


// event add functionality 

    Route::post('events/addEvent', [
        'middleware' => 'admin',
        'uses' => 'EventsController@addEvent'
    ]);



    // Event edit functionality 
    Route::get('events/{event}/edit', [
        'middleware' => 'admin',
        'uses' => 'EventsController@editEvent'
    ]);

    Route::patch('events/{event}', [
        'middleware' => 'admin',
        'uses' => 'EventsController@update'
    ]);


    Route::get('events/{event}/delete', [
        'middleware' => 'admin',
        'uses' => 'EventsController@delete'
    ]);


    //Charity edit functionality 
    Route::get('charities/{charity}/edit', [
        'middleware' => 'admin',
        'uses' => 'CharitiesController@editCharity'
    ]);
    Route::patch('charities/{charity}', [
        'middleware' => 'admin',
        'uses' => 'CharitiesController@update'
    ]);


    Route::get('charities/{charity}/delete', [
        'middleware' => 'admin',
        'uses' => 'CharitiesController@delete'
    ]);

    Route::post('charities/{charity}/createVote', [
        'middleware' => 'auth',
        'uses' => 'VotesController@store'
     ]);

    Route::post('stripe/payment', function () {

        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_9nWvguri1A0OI3mqdtvq8LsT");

        // Get the credit card details submitted by the form

            $token = Request::get('stripeToken');

        // Create the charge on Stripe's servers - this will charge the user's card
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => 10300, // amount in cents, again
                "currency" => "cad",
                "source" => $token,
                "description" => "Example charge"
            ));
        } catch(\Stripe\Error\Card $e) {
        // The card has been declined
        }
        return back;


    });

    //reports

    Route::get('reports/new-members', [
        'middleware' => 'admin',
        'uses' => 'ReportController@export'
    ]);

    Route::get('reports/attendies', [
        'middleware' => 'admin',
        'uses' => 'ReportController@attended'
    ]);





});
