<?php

use Illuminate\Http\Request;
// use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'UserController@login')->name("login");
Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('details', 'UserController@details');
    Route::post('changepassword', 'UserController@changePassword');
    Route::post('profile', 'UserController@profile');
    Route::post('profileavatar', 'UserController@update_avatar');

    Route::group(['prefix' => 'tugas'], function () {
        // Route::post('/4-1/submit', 'KuisController@submit');
        // Route::post('/4-2/submit', 'KuisController@submit2');
        // Route::post('/4-3/submit', 'KuisController@submit3');
        // Route::post('/4-4/submit', 'KuisController@submit3');
        // Route::post('/4-5/submit', 'KuisController@submit3');
        // Route::post('/4-6/submit', 'KuisController@submit3');
        Route::post('/4-7/submit', 'KuisController@submit3');

        Route::post('/4-1/kuis', 'KuisController@index');
        Route::post('/4-2/kuis', 'KuisController@kuis2');
        Route::post('/4-3/kuis', 'KuisController@kuis3');
        Route::post('/4-4/kuis', 'KuisController@kuis4');
        Route::post('/4-5/kuis', 'KuisController@kuis5');
        Route::post('/4-6/kuis', 'KuisController@kuis6');
        Route::post('/4-7/kuis', 'KuisController@kuis7');
    });


});
