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
    return view('welcome');
});



Route::fallback(function(){
    $myVar = 'Some error';
    return view('404', compact('myVar'));
});

Route::any('/login', 'Auth\LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test_preparing/{block}', 'TestPreparingController@index');
Route::get('/test/{block}', 'TestController@index');
Route::post('/test', 'TestController@save')->name('submitTest');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


