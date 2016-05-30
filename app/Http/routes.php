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



     Route::get('donate', [
        'middleware' => 'auth',
        'uses' => 'DonationController@donate'
    ]);


    Route::get('charities/{charity}/voting', [
        'middleware' => 'auth',
        'uses' => 'VotesController@newVote'
     ]);

     Route::get('events/{event}/check-in', [
        'middleware' => 'auth',
        'uses' => 'EventsController@checkIn'
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
    Route::get('events/{event}/passcode', [
        'middleware' => 'auth',
        'uses' => 'EventsController@passcode'
    ]);

    Route::post('events/{event}/charities',[
        'middleware' => 'admin',
        'uses' => 'CharitiesController@store'
     ]);
    Route::get('event/{event}/current',[
        'middleware' => 'admin',
        'uses' => 'EventsController@updateCurrent'
     ]);




    Route::post('events/add', [
        'middleware' => 'admin',
        'uses' => 'EventsController@addEvent'
    ]);
    Route::get('charities/{charity}/edit', [
        'middleware' => 'admin',
        'uses' => 'CharitiesController@edit'
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

});
