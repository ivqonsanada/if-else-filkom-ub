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

Route::get('/', 'PageController@index');

Route::get('/faq', 'PageController@faq');
Route::get('/documentation', 'PageController@documentation');
Route::get('/rules', 'PageController@rules');

Route::get('/login', 'PageController@login');
Route::get('/home', 'PageController@home');
Route::get('/nilai', 'PageController@nilai');
Route::get('/tugas', 'PageController@tugas');
