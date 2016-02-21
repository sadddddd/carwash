<?php

class ServiceController extends BaseController {

	public function maintenanceService()
	{
		$ids = DB::table('tblServ')
			->select('strServId')
			->orderBy('created_at', 'desc')
			->orderBy('strServId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strServId;
		$newID = $this->smart($ID);

		$ids2 = DB::table('tblServPrice')
			->select('strServPriceId')
			->orderBy('created_at', 'desc')
			->orderBy('strServPriceId', 'desc')
			->take(1)
			->get();

		$ID2 = $ids2["0"]->strServPriceId;
		$priceID = $this->smart($ID);

		$category = MProdServCat::all();
		$cartype = MCarType::all();
		$price = DB::table('tblServPrice')
			->join('tblServ', 'tblServPrice.strSPServ','=','tblServ.strServId')
			->select('tblServPrice.*')
			->orderBy('tblServPrice.dtmServPrice', 'desc')
			->get();

		$var = 0;

		$service = DB::table('tblServ')
			->join('tblProdSerCat', 'tblServ.strSServCat','=','tblProdSerCat.strProdSerCatId')
			->join('tblCarType', 'tblServ.strSCarType','=','tblCarType.strCarTypeId')
			->select('tblServ.*', 'tblProdSerCat.strProdSerName', 'tblCarType.strCarTypeName')
			->get();

		return View::make('serviceMaintenance')->with('newID',$newID)->with('categories',$category)->with('cartypes',$cartype)
		->with('services',$service)->with('servprice',$price)->with('var',$var)->with('priceId',$priceID);
	}

	public function addService()
	{
		$id = Input::get('service_id_add');
		//dd($id);
		$service = MServ::create(array(
			'strServId' => Input::get('service_id_add'),
			'strServName' => Input::get('service_name_add'),
			'strSServCat' => Input::get('service_cat_add'),
			'strSCarType' => Input::get('ser_cartype_add'),
			'status' => '1'
		));
		$service->save();

		$price = MServPrice::create(array(
			'strServPriceId' => Input::get('price_id_add'),
			'strSPServ' => Input::get('service_id_add'),
			'dblServPrice' => Input::get('service_price_add'),
			'dtmServPrice' => date("Y-m-d")
		));
		$price->save();

		return Redirect::to('/ServiceDetails');
	}

	public function deleteService()
	{
		$getID = Input::get('ser_id_del');
		//dd($getID);
		$service = MServ::find($getID);
		$service->status='0';
		$service->save();

		return Redirect::to('/ServiceDetails');
	}

	public function updateService()
	{
		$getID = Input::get('service_id_edit');
		//dd($getID);
		$service = MServ::find($getID);
		$service->strServName = Input::get('service_name_edit');
		$service->strSServCat = Input::get('service_cat_edit');
		$service->strSCarType = Input::get('ser_cartype_edit');
		$service->save();

		$price = MServPrice::create(array(
			'strServPriceId' => Input::get('price_id_edit'),
			'strSPServ' => Input::get('service_id_edit'),
			'dblServPrice' => Input::get('service_price_edit'),
			'dtmServPrice' => date("Y-m-d")
		));
		$price->save();

		return Redirect::to('/ServiceDetails');
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