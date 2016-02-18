<?php

class SupplierController extends BaseController {

	public function maintenanceSupplier()
	{
		$ids = DB::table('tblSupplier')
			->select('strSuppId')
			->orderBy('created_at', 'desc')
			->orderBy('strSuppId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strSuppId;
		$newID = $this->smart($ID);

		$supplier = MSupplier::all();
		return View::make('supplierMaintenance')->with('suppliers',$supplier)->with('newID', $newID);
	}

	public function addSupplier()
	{
		$id = Input::get('supplier_id_add');
		//dd($id);
		$supplier = MSupplier::create(array(
			'strSuppId' => Input::get('supplier_id_add'),
			'strSuppName' => Input::get('supplier_name_add'),
			'strSuppStAdd' => Input::get('supplier_st_add'),
			'strSuppCityAdd' => Input::get('supplier_brgy_add'),
			'strSuppStateAdd' => Input::get('supplier_city_add'),
			'strSSCont' => Input::get('supplier_contactNo_add'),
			'strSuppEAdd' => Input::get('supplier_emailAd_add'),
			'strSSContFName' => Input::get('supplier_fname_add'),
			'strSSContMInit' => Input::get('supplier_mname_add'),
			'strSSContLName' => Input::get('supplier_lname_add'),
			'status' => '1'
		));
		$supplier->save();
		return Redirect::to('/SupplierDetails');
	}

	public function deleteSupplier()
	{
		$id = Input::get('sup_ID_del');
		$supplier = MSupplier::find($id);
		$supplier->status='0';
		$supplier->save();

		return Redirect::to('/SupplierDetails');
	}

	public function updateSupplier()
	{
		$id = Input::get('supplier_id_edit');
		$supplier = MSupplier::find($id);
		$supplier->strSuppName = Input::get('supplier_name_edit');
		$supplier->strSuppStAdd = Input::get('supplier_st_edit');
		$supplier->strSuppCityAdd = Input::get('supplier_brgy_edit');
		$supplier->strSuppStateAdd = Input::get('supplier_city_edit');
		$supplier->strSSCont = Input::get('supplier_contactNo_edit');
		$supplier->strSuppEAdd = Input::get('supplier_emailAd_edit');
		$supplier->strSSContFName = Input::get('supplier_fname_edit');
		$supplier->strSSContMInit = Input::get('supplier_mname_edit');
		$supplier->strSSContLName = Input::get('supplier_lname_edit');
		$supplier->save();

		return Redirect::to('/SupplierDetails');
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
