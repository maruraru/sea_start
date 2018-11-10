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
    return view('main');
});

Route::fallback(function(){
    $myVar = 'Some error';
    return view('404', compact('myVar'));
});

Route::any('/login', 'Auth\LoginController@login');
Route::any('/registration', function () {
    return view('registration');
}); //TODO!

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
