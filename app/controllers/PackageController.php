<?php

class PackageController extends BaseController {

	public function maintenancePackage()
	{
		$ctr=0;

		$ids = DB::table('tblPackage')
			->select('strPackId')
			->orderBy('created_at', 'desc')
			->orderBy('strPackId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strPackId;
		$newID = $this->smart($ID);

		// $ids2 = DB::table('tblPackPrice')
		// 	->select('strPPId')
		// 	->orderBy('created_at', 'desc')
		// 	->orderBy('strPPId', 'desc')
		// 	->take(1)
		// 	->get();

		// $ID2 = $ids["0"]->strPPId;
		// $priceID = $this->smart($ID);

		$package = MPackage::all();

		$servprice = DB::table('tblServPrice')
			->join('tblServ', 'tblServPrice.strSPServ','=','tblServ.strServId')
			->select('tblServPrice.*','tblServ.strServName')
			->orderBy('tblServPrice.dtmServPrice', 'asc')
			->get();

		$packprice = DB::table('tblPackPrice')
			->join('tblPackage', 'tblPackPrice.strPPPack','=','tblPackage.strPackId')
			->select('tblPackPrice.*')
			->orderBy('tblPackPrice.dtmAsOf', 'asc')
			->get();

		$category = MProdServCat::all();

		$var = 0;

		return View::make('packageMaintenance')->with('newID',$newID)->with('pack',$package)->with('service',$servprice)
		->with('packprice',$packprice)->with('var',$var)->with('ctr',$ctr)->with('category',$category);

	}
	public function deletePackage()
	{
		$PackId = Input::get('package_id_delete');
		$package = MPackage::find($PackId);
		$package->status='0';
		$package->save();

		return Redirect::to('/Package');
	}

	public function updatePackage()
	{
		$PackId = Input::get('pack_id_edit');
		$package = MPackage::find($PackId);
		$package->strPackName=Input::get('pack_name_edit');
		$package->save();

		return Redirect::to('/Package');
	}

	public function servicePackage()
	{
		$var = 0;
		$sum = 0;
		$label = '';
		$packageid = Input::get('PackId');

		$packserv = DB::table('tblPackToServ')
			->join('tblPackage', 'tblPackToServ.strPTSPack','=','tblPackage.strPackId')
			->join('tblServ', 'tblPackToServ.strPTSServ','=','tblServ.strServId')
			->select('tblPackToServ.*','tblPackage.strPackName','tblServ.strServName')
			->get();

		$ids = DB::table('tblPackToServ')
			->select('strPTSId')
			->orderBy('created_at', 'desc')
			->orderBy('strPTSId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strPTSId;
		$newID = $this->smart($ID);

		$servprice = DB::table('tblServ')
			->join('tblServPrice', 'tblServPrice.strSPServ','=','tblServ.strServId')
			->select('tblServ.*','tblServPrice.dblServPrice','tblServPrice.dblServPrice')
			->orderBy('tblServPrice.dtmServPrice', 'asc')
			->get();

		$servpack= DB::table('tblPackToServ')
			->select('tblPackToServ.strPTSServ')
			->where('tblPackToServ.strPTSPack', $packageid)
			->first();
			// dd($servpack);

		$service1 = DB::table('tblServ')
		->join('tblPackToServ', 'tblServ.strServId','=','tblPackToServ.strPTSServ')
		->select('tblServ.*')
		->whereNotIn('tblServ.strServId', [$servpack->strPTSServ])
		->get();
		//dd($service1);

		return View::make('ServicesPerPackages')->with('servpack',$packserv)->with('newID',$newID)->with('serv',$service1)
		->with('packID',$packageid)->with('var',$var)->with('service',$servprice)->with('sum',$sum)->with('label',$label);
	}

	public function deleteServpack()
	{
		$PackId = Input::get('servpack_id_del');
		$package = MPackToServ::find($PackId);
		$package->status='0';
		$package->save();

		return Redirect::to('/Package');
	}

	public function servicePackageAdd()
	{
		$servpack = MPackToServ::create(array(
			'strPTSId' => Input::get('servpack_id_add'),
			'strPTSPack' => Input::get('pack_id_add'),
			'strPTSServ' => Input::get('service_id_add'),
			'status' => '1'
		));
		$servpack->save();

		return Redirect::to('/Package');
	}

	private function smart($id)
	{

		$arrID = str_split($id);

		$new = "";
		$somenew = "";
		$arrNew = [];
		$boolAdd = TRUE;

		for($ctr = count($arrID) - 1; $ctr >= 0; $ctr--)
		{
			$new = $arrID[$ctr];

			if($boolAdd)
			{

				if(is_numeric($new) || $new == '0')
				{
					if($new == '9')
					{
						$new = '0';
						$arrNew[$ctr] = $new;
					}
					else
					{
						$new = $new + 1;
						$arrNew[$ctr] = $new;
						$boolAdd = FALSE;
					}//else
				}//if(is_numeric($new))
				else
				{
					$arrNew[$ctr] = $new;
				}//else
			}//if ($boolAdd)
			
			$arrNew[$ctr] = $new;
		}//for

		for($ctr2 = 0; $ctr2 < count($arrID); $ctr2++)
		{
			$somenew = $somenew . $arrNew[$ctr2] ;
		}
		return $somenew;
	}
}
