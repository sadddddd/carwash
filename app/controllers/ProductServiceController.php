<?php

class ProductServiceController extends BaseController {

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
}
