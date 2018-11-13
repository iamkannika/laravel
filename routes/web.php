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

Route::get('test', function () {
    return 5;

});
Route::get('page01', function () {
    return view('welcome1');
});

Route::get('page01/welcome', function () {
    return view('welcome1');

});

Route::get('page2', function () {
    return view('welcome2');

});


Route::get('welcomecontroller', 'HelloController@functionName');
Route::get('welcomecontroller02', 'HelloController@functionName02');