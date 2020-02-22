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


Route::get('/logout', function () {
    Auth::logout();
    return view('auth.login');
})->name('logout');


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('layouts.admin');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/test', function () {
        return view('test');
    });

    Route::resource('clients', 'Client\ClientController', ['only' => ['index']]);

    Route::resource('clientpayment', 'ClientPaymentController', ['only' => ['index']]);
    Route::resource('clientdetails', 'AjaxClientController', ['only' => ['index']]);
    Route::resource('registerclient', 'ClientPackageController', ['only' => ['index']]);
    Route::resource('clientexpenses', 'ClientExpenseController', ['only' => ['index']]);

    /*Organization*/
    Route::resource('organizationexpenses', 'Organaization\OrganizationExpenseController', ['only' => ['index']]);
    Route::resource('donatorpayment', 'DonationController', ['only' => ['index']]);


    /*Setup*/


    Route::resource('PackageSetup', 'Package\PackageSetupController', ['only' => ['index']]);

    Route::resource('ExpenseSetup', 'Expense\ExpenseSetupController', ['only' => ['index']]);



});

