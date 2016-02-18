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

Route::post('/details',array('uses'=>'CustCarController@carDetails'));

Route::post('/carEdit',array('uses'=>'CustCarController@carEdit'));

Route::post('/carDelete',array('uses'=>'CustCarController@carDelete'));

Route::post('/carAdd',array('uses'=>'CustCarController@carAdd'));

Route::get('/Login',"LoginController@logIn");

Route::get('/Maintenance',"HomeController@maintenaceMain");

Route::get('/CustomerDetails', "CustomerController@maintenanceCustomer");

Route::post('/customerAdd', array('uses'=>'CustomerController@addCustomer'));

Route::post('/customerEdit', array('uses'=>'CustomerController@updateCustomer'));

Route::post('/customerDelete', array('uses'=>'CustomerController@deleteCustomer'));

Route::get('/SupplierDetails', "SupplierController@maintenanceSupplier");

Route::post('/supplierAdd', array('uses'=>'SupplierController@addSupplier'));

Route::post('/supplierDelete', array('uses'=>'SupplierController@deleteSupplier'));

Route::post('/supplierUpdate', array('uses'=>'SupplierController@updateSupplier'));

Route::get('/CarType', "CarController@maintenanceCartype");

Route::post('/cartypeUp', array('uses'=>'CarController@updateCartype'));

Route::post('/cartypeAdd', array('uses'=>'CarController@addCartype'));

Route::post('/cartypeDel', array('uses'=>'CarController@deleteCartype'));

Route::get('/CarBrand', "CarController@maintenanceCarbrand");

Route::post('/carbrandUp', array('uses'=>'CarController@updateCarbrand'));

Route::post('/carbrandAdd', array('uses'=>'CarController@addCarbrand'));

Route::post('/carbrandDel', array('uses'=>'CarController@deleteCarbrand'));

Route::get('/CarModel', "CarController@maintenanceCarmodel");

Route::post('/carmodelAdd', array('uses'=>'CarController@addCarmodel'));

Route::post('/carmodelDel', array('uses'=>'CarController@deleteCarmodel'));

Route::post('/carmodelEdit', array('uses'=>'CarController@updateCarmodel'));

Route::get('/Categories', "ProductServiceController@maintenanceProSerCat");

Route::get('/ServiceDetails', "ProductServiceController@maintenanceService");

Route::get('/ProductDetails', "ProductServiceController@maintenanceProduct");

Route::get('/Package', "PackageController@maintenancePackage");

Route::get('/Promo', "PromoController@maintenancePromo");

Route::get('/FreqCard', "FreqCardController@maintenanceFreqCard");