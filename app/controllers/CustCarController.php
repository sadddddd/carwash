<?php

class CustCarController extends BaseController {

	public function carDetails() 
	{
		$sum = 0;
		$label = '';
		$custid = Input::get('customerId');
		$label='';
		$custcar = DB::table('tblCustCar')
				->join('tblCustomer', 'tblCustCar.strCCCust','=','tblCustomer.strCustId')
				->join('tblCarModel', 'tblCustCar.strCCModel','=','tblCarModel.strCarModelId')
				->join('tblCarType', 'tblCarModel.strCMType', '=', 'tblCarType.strCarTypeId')
				->join('tblCarBrand', 'tblCarModel.strCMBrand', '=', 'tblCarBrand.strCarBrandId')
<<<<<<< HEAD
				->select('tblCustCar.*', 'tblCarModel.strCarModelDesc', 'tblCustomer.strCustId', 'tblCarType.strCarTypeName','tblCarBrand.strCarBrandDesc','tblCustomer.strCustFName')
=======
				->select('tblCustCar.*', 'tblCarModel.strCarModelDesc', 'tblCustomer.strCustFName', 'tblCustomer.strCustMInit',
					'tblCustomer.strCustLName', 'tblCarType.strCarTypeName','tblCarBrand.strCarBrandDesc')
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
				->get();
		$carmodel = MCarModel::all();

		return View::make('custcarMaintenance')->with('custcars', $custcar)->with('custid', $custid)->with('carmodels', $carmodel)->with('label',$label);
	}

	public function carAdd()
	{
		//dd(Input::get('custid_caradd'));
		$newcar = MCustCar::create(array(
			'strCCCust' => Input::get('custid_caradd'),
			'strCCModel' => Input::get('carmodel_add'),
			'strCCPlateNo' => Input::get('carplate_add'),
			'status' => '1'
		));

		$newcar->save();
		return Redirect::to('/CustomerDetails');
	}

	public function carEdit()
	{
		$oldplate = Input::get('carplate_old');
		$customercar = MCustCar::find($oldplate);
		//dd($oldplate);
		
		$customercar->strCCCust = Input::get('custid_caredit');
		$customercar->strCCPlateNo = Input::get('carplate_edit');
		$customercar->strCCModel = Input::get('carmodel_edit');
		$customercar->save();

		return Redirect::to('/CustomerDetails');
	}

	public function carDelete()
	{
		
		$plate = Input::get('carplate_delete');
		$customercardel = MCustCar::find($plate);
		//dd($plate);
		
		$customercardel->status='0';
		$customercardel->save();

		return Redirect::to('/CustomerDetails');
	}



}