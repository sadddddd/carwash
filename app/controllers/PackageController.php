<?php

class PackageController extends BaseController {

	public function maintenancePackage()
	{
		return View::make('packageMaintenance');
	}
}
