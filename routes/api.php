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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('fetchClient', 'AjaxClientController@fetchClient');

/*
                         CLIENTS
*/
Route::get('fetchClient', 'Client\FetchClientController@fetchClientPackage')->name('fetchClient');
Route::resource('clients', 'Client\ClientController', ['only' => ['store']]);
