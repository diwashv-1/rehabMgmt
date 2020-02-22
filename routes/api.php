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


/***************        Package Detail         **********/
Route::get('packageDetail', 'Package\AjaxPackageController@getPackageDetail');

Route::resource('PackageSetup', 'Package\PackageSetupController', ['only' => ['store']]);


/***********        Expense Detail    ************/

Route::resource('ExpenseSetup', 'Expense\ExpenseSetupController', ['only' => ['store']]);

Route::get('expenseDetail', 'Expense\AjaxExpenseController@getExpenseDetail');


/**********************          Organization      *************/

Route::get('fetchExpensesOnOrganaization', 'Expense\AjaxExpenseController@getExpenseDetail');

Route::resource('organizationexpenses', 'Organaization\OrganizationExpenseController', ['only' => ['store']]);



