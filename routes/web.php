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



Route::get('/view', 'ViewController@index');

//Route::get('/add', 'AddController@index');

//Route::post('/show','AddController@store');


Route::resource('tasks','TaskController');
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/about', 'TestController@about');

Route::get('/contact', 'TestController@contact');


