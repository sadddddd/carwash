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

Route::get('/Login',"LoginController@logIn");

Route::get('/Maintenance',"HomeController@maintenaceMain");

Route::get('/CustomerDetails', "CustomerController@maintenanceCustomer");

Route::get('/SupplierDetails', "SupplierController@maintenanceSupplier");

Route::get('/CarType', "CarController@maintenanceCartype");

Route::get('/CarBrand', "CarController@maintenanceCarbrand");

Route::post('/carbrandUp', array('uses'=>'CarController@updateCarbrand'));

Route::get('/CarModel', "CarController@maintenanceCarmodel");

Route::get('/Categories', "ProductServiceController@maintenanceProSerCat");

Route::get('/ServiceDetails', "ProductServiceController@maintenanceService");

Route::get('/ProductDetails', "ProductServiceController@maintenanceProduct");

Route::get('/Package', "PackageController@maintenancePackage");

Route::get('/Promo', "PromoController@maintenancePromo");

Route::get('/FreqCard', "FreqCardController@maintenanceFreqCard");