<?php

class CarController extends BaseController {

	public function maintenanceCartype()
	{
		$ids = DB::table('tblCarType')
			->select('strCarTypeId')
			->orderBy('created_at', 'desc')
			->orderBy('strCarTypeId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strCarTypeId;
		$newID = $this->smart($ID);

		$types = MCarType::all();
		return View::make('cartypeMaintenance')->with('carTypes', $types)->with('newID', $newID);
	}

	public function maintenanceCarbrand()
	{
		$ids = DB::table('tblCarBrand')
			->select('strCarBrandId')
			->orderBy('created_at', 'desc')
			->orderBy('strCarBrandId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strCarBrandId;
		$newID = $this->smart($ID);

		$brands = MCarBrand::all();

		return View::make('carbrandMaintenance')->with('carbrands', $brands)->with('newID', $newID);
	}

	public function updateCarbrand() 
	{
		$id = Input::get('car_brand_id_edit');
		
		$carbrand = MCarBrand::find($id);

		$carbrand->strCarBrandDesc = Input::get('car_brand_name_edit');

		$carbrand->save();
		//dd($id);
		return Redirect::to('/CarBrand');
	}

	

	public function maintenanceCarmodel()
	{
		$ids = DB::table('tblCarModel')
			->select('strCarModelId')
			->orderBy('created_at', 'desc')
			->orderBy('strCarModelId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strCarModelId;
		$newID = $this->smart($ID);

		$models = MCarModel::all();
		return View::make('carmodelMaintenance')->with('carModels', $models)->with('newID', $newID);
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
