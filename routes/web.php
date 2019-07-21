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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', 'PageController@index');

// Route::get('/faq', 'PageController@faq');
// Route::get('/documentation', 'PageController@documentation');
// Route::get('/rules', 'PageController@rules');

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('{any?}', 'PageController@index')->where('any', '.*');
// Route::post('/home2', 'PageController@home2');
// Route::get('/nilai', 'PageController@nilai');
// Route::get('/tugas', 'PageController@tugas');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
