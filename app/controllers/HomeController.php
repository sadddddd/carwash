<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('home');
	}

	public function logIn()
	{
		return View::make('login');
	}

	public function maintenaceMain()
	{
		return View::make('maintenance');
	}

	public function maintenanceCustomer()
	{
		return View::make('customerMaintenance');
	}

	public function maintenanceSupplier()
	{
		return View::make('supplierMaintenance');
	}

	public function maintenanceCartype()
	{
		return View::make('cartypeMaintenance');
	}

	public function maintenanceCarbrand()
	{
		return View::make('carbrandMaintenance');
	}

	public function maintenanceCarmodel()
	{
		return View::make('carmodelMaintenance');
	}

	public function maintenanceProSerCat()
	{
		return View::make('prod_ser_category');
	}

	public function maintenanceService()
	{
		return View::make('serviceMaintenance');
	}

	public function maintenanceProduct()
	{
		return View::make('productMaintenance');
	}

	public function maintenancePackage()
	{
		return View::make('packageMaintenance');
	}

	public function maintenancePromo()
	{
		return View::make('promoMaintenance');
	}

	public function maintenanceFreqCard()
	{
		return View::make('freqcardMaintenance');
	}
}
