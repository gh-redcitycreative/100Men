<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
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
Route::get('/events', function () {
    return view('pages.events');
});
Route::get('/create-event', function () {
    return view('pages.create-event');
});
Route::get('/report', function () {
    return view('pages.report');
});


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

Route::group(['middleware' => ['web']], function () {
    //
});
