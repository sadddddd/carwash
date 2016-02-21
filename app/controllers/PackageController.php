<?php

class PackageController extends BaseController {

	public function maintenancePackage()
	{

		$package = MPackage::all();
		$packprice = DB::table('tblPackPrice')
			->join('tblPackage', 'tblPackPrice.strPPPack','=','tblPackage.strPackId')
			->select('tblPackPrice.*')
			->orderBy('tblPackPrice.dtmAsOf', 'desc')
			->get();

		$var = 0;

		return View::make('packageMaintenance')->with('pack',$package)->with('packprice',$packprice)->with('var',$var);

	}
	public function deletePackage()
	{
		$PackId = Input::get('package_id_delete');
		$package = MPackage::find($PackId);
		$package->status='0';
		$package->save();

		return Redirect::to('/Package');
	}
}
