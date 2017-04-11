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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/music-player-1', function() {
	return view('mp1');
});

Route::get('/music-player-2', function() {
	return view('mp2');
});

// Route::get('/all-maths-formula', function() {
// 	return view('amf');
// });

Route::get('/apps-backup-and-reinstall', function() {
	return view('abar');
});

// Route::get('/root-checker', function() {
// 	return view('rc');
// });

Route::get('/system-app-remover', function() {
	return view('sar');
});

Route::get('/inquiry', function() {
	return view('inquiry');
});

Route::post('/success', 'MailController@upload')->name('sendmail');

Route::get('/Contact', function() {
	return view('contact');
});