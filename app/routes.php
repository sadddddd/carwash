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

Route::post('/categoryDel', array('uses'=>'ProductServiceController@deleteCategory'));

Route::post('/categoryUp', array('uses'=>'ProductServiceController@updateCategory'));

Route::post('/categoryAdd', array('uses'=>'ProductServiceController@addCategory'));

Route::get('/ServiceDetails', "ServiceController@maintenanceService");

Route::post('/serviceAdd', array('uses'=>'ServiceController@addService'));

Route::post('/serviceDel', array('uses'=>'ServiceController@deleteService'));

Route::post('/serviceUp', array('uses'=>'ServiceController@updateService'));

Route::post('/ProdPerServ', array('uses'=>'ProductServiceController@productPerService'));

Route::post('/ppsDel', array('uses'=>'ProductServiceController@productPerServiceDel'));

Route::post('/ppsAdd', array('uses'=>'ProductServiceController@productPerServiceAdd'));

Route::post('/ppsUp', array('uses'=>'ProductServiceController@productPerServiceUp'));

Route::get('/ProductDetails', "ProductController@maintenanceProduct");

Route::post('/productDel', array('uses'=>'ProductController@deleteProduct'));

Route::post('/productUp', array('uses'=>'ProductController@updateProduct'));

Route::post('/productAdd', array('uses'=>'ProductController@addProduct'));

Route::get('/Package', "PackageController@maintenancePackage");

Route::get('/Promo', "PromoController@maintenancePromo");

Route::get('/FreqCard', "FreqCardController@maintenanceFreqCard");


Route::post('/carmodelActive', array('uses'=>'CarController@activateCarmodel'));

Route::post('/carmodelValidate', array('uses'=>'CarController@modelValidate'));

Route::post('/carmodelReactive', array('uses'=>'CarController@reactivateCarmodel'));


Route::post('/customerReactive', array('uses'=>'CustomerController@reactivateCustomer'));

Route::post('/supplierReactive', array('uses'=>'SupplierController@reactivateSupplier'));


Route::post('/carbrandReactive', array('uses'=>'CarController@reactivateCarbrand'));

Route::post('/carbrandActive', array('uses'=>'CarController@activateCarbrand'));

Route::post('/carbrandValidate', array('uses'=>'CarController@brandValidate'));


Route::post('/cartypeReactive', array('uses'=>'CarController@reactivateCartype'));

Route::post('/cartypeActive', array('uses'=>'CarController@activateCartype'));

Route::post('/cartypeValidate', array('uses'=>'CarController@typeValidate'));


