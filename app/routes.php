<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/Home', "HomeController@showWelcome");

Route::get('/Login',"HomeController@logIn");

Route::get('/Maintenance',"HomeController@maintenaceMain");

Route::get('/CustomerDetails', "HomeController@maintenanceCustomer");

Route::get('/SupplierDetails', "HomeController@maintenanceSupplier");

Route::get('/CarType', "HomeController@maintenanceCartype");

Route::get('/CarBrand', "HomeController@maintenanceCarbrand");

Route::get('/CarModel', "HomeController@maintenanceCarmodel");

Route::get('/Categories', "HomeController@maintenanceProSerCat");

Route::get('/ServiceDetails', "HomeController@maintenanceService");

Route::get('/ProductDetails', "HomeController@maintenanceProduct");

Route::get('/Package', "HomeController@maintenancePackage");

Route::get('/Promo', "HomeController@maintenancePromo");

Route::get('/FreqCard', "HomeController@maintenanceFreqCard");