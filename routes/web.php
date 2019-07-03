<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Mail\TestEmail;


Route::get ( '/', function () {
	return view ( 'welcome' );
} );


Route::post ( '/vueitems', 'MainController@storeItem' );

Route::get('/send', function () {
    Mail::to('jneu2k@gmail.com')->send(new TestEmail);

    return view('emails.mail');
});

