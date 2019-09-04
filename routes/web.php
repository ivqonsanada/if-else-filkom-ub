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


Route::get('nyoba', 'PostController@index');
Route::get('nyoba/{id?}', 'PostController@post');

Route::get('youtube', function () {
  return redirect()->away('https://www.youtube.com/channel/UCaAZt3JB9xgqj7xRosdtsig');
});

Route::get('kelompok', function () {
  return redirect()->away('https://drive.google.com/file/d/1iWw9Cic-c6eC6ONpabm1gs6FsDRpceyJ/view?usp=sharing');
});

Route::get('twibbon', function () {
  return redirect()->away('https://drive.google.com/drive/folders/1gi0NKHBDo-sa92QYjlYxWdEM6JDj1iJ4?usp=sharing');
});

Route::get('pendamping-maba', 'PendampingController@index');

Route::get('{any?}', 'PageController@index')->where('any', '.*');




// Route::post('/home2', 'PageController@home2');
// Route::get('/nilai', 'PageController@nilai');
// Route::get('/tugas', 'PageController@tugas');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
