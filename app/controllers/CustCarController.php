<?php

class CustomerController extends BaseController {

	public function carDetails()
	{
		$custcar = MCustCar::all();
		$carmodel = MCarModel::all();

		return View::make('custcarMaintenance')->with('custcar', $custcar)->with('carmodels', $carmodel);
	}

}