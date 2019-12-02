<?php

use Illuminate\Http\Request;

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

use Api\clssesController;

///=====================classes
Route::get('/class', 'Api\clssesController@index');
Route::post('/class', 'Api\clssesController@store');
Route::delete('/class/{id}', 'Api\clssesController@destroy');
Route::post('/class/update', 'Api\clssesController@update');

///=====================subject

Route::apiResource('/subject', 'Api\SubjectController');
Route::apiResource('/studet', 'Api\StudentController');

Route::group([
    /*
        'middleware' => 'api',
        'namespace' => 'App\Http\Controllers',*/
    'prefix' => 'auth'

], function () {

    /* Route::post('login', function () {
         return response()->json('pk');
     });*/
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');

});
