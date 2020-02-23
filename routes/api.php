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


/*
                         CLIENTS
*/
Route::get('fetchClient', 'Client\FetchClientController@fetchClientPackage')->name('fetchClient');

Route::get('fetchClientDetail', 'AjaxClientController@fetchClient');
Route::post('fetchClientInfo', 'Client\AjaxClientController@fetchClientInfo');
Route::resource('clients', 'Client\ClientController', ['only' => ['store']]);


/***************        Package Detail         **********/
Route::get('packageDetail', 'Package\AjaxPackageController@getPackageDetail');

Route::resource('PackageSetup', 'Package\PackageSetupController', ['only' => ['store']]);

/*************        CLIENT PACKAGE         ***************/

Route::resource('clientPackage', 'Client\ClientPackageController', ['only' => ['store']]);

/******************      CLIENT EXPENSE DETAIL       ***************/
Route::get('fetchClientNExpenseDetail', 'Expense\AjaxExpenseClientController@fetchClientNExpenseDetail');

Route::resource('clientexpense', 'Expense\ClientExpenseController', ['only' => ['store']]);


/***********        Expense Detail    ************/

Route::resource('ExpenseSetup', 'Expense\ExpenseSetupController', ['only' => ['store']]);

Route::get('expenseDetail', 'Expense\AjaxExpenseController@getExpenseDetail');


/**********************          Organization      *************/

Route::get('fetchExpensesOnOrganaization', 'Expense\AjaxExpenseController@getExpenseDetail');

Route::resource('organizationexpenses', 'Organaization\OrganizationExpenseController', ['only' => ['store']]);



