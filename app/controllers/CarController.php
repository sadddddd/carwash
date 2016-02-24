<?php

class CarController extends BaseController {

	public function maintenanceCartype()
	{
		$ctr=0;
		$ids = DB::table('tblCarType')
			->select('strCarTypeId')
			->orderBy('created_at', 'desc')
			->orderBy('strCarTypeId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strCarTypeId;
		$newID = $this->smart($ID);

		$types = MCarType::all();
		return View::make('cartypeMaintenance')->with('carTypes', $types)->with('newID', $newID)->with('ctr',$ctr);
	}

	public function typeValidate(){
		
		$id=Input::get('car_type_id_add');
		$mname=Input::get('car_type_name_add');
		$desc = Input::get('car_type_desc_add');
		

		$model = DB::table('tblCarType')
				->where('strCarTypeName',$mname)
				->pluck('strCarTypeId');
	
		if($model != null){
			$this->activateCartype($model);
			return Redirect::to('/CarType');	
		}else{
			$this->addCartype($id,$mname,$desc);
			return Redirect::to('/CarType');	

		
		}
	}

		public function activateCartype($id)
	{

		$modelid=$id;
		$model = MCarType::find($modelid);
		$model->status='1';
		$model->save();
		
		return Redirect::to('/CarType');
	}


	public function reactivateCartype()
	{
		$id = Input::get('car_type_id_del');
		$modelid=$id;
		$model = MCarType::find($modelid);
		$model->status='1';
		$model->save();
		
		return Redirect::to('/CarType');
	}

	public function updateCartype() 
	{
		$id = Input::get('car_type_id_edit');
		//dd(Input::get('car_brand_name_edit'));
		$cartype = MCarType::find($id);
		$cartype->strCarTypeName = Input::get('car_type_name_edit');
		$cartype->strCarTypeDesc = Input::get('car_type_desc_edit');
		$cartype->save();
		
		return Redirect::to('/CarType');
	}

	public function deleteCartype() 
	{
		$getID = Input::get('car_type_id_del');
		//dd($getID);
		$type = MCarType::find($getID);
		$type->status='0';
		$type->save();

	return Redirect::to('/CarType');
	}

	public function addCartype($id,$mname,$desc) 
	{


		$id = Input::get('car_type_id_add');
		//dd($id);
		$type = MCarType::create(array(
			'strCarTypeId' => $id,
			'strCarTypeName' => $mname,
			'strCarTypeDesc' => $desc,
			'status' => '1'
		));
		$type->save();
		return Redirect::to('/CarType');
	}

	public function maintenanceCarbrand()
	{
		$ctr=0;
		$ids = DB::table('tblCarBrand')
			->select('strCarBrandId')
			->orderBy('created_at', 'desc')
			->orderBy('strCarBrandId', 'desc')
			->take(1)
			->get();
		$ID = $ids["0"]->strCarBrandId;
		$newID = $this->smart($ID);

		$brands = MCarBrand::all();

		return View::make('carbrandMaintenance')->with('carbrands', $brands)->with('newID', $newID)->with('ctr',$ctr);
	}

public function brandValidate(){
		
		$id=Input::get('car_brand_id_add');
		$mname=Input::get('car_brand_name_add');
		

		$model = DB::table('tblCarBrand')
				->where('strCarBrandDesc',$mname)
				->pluck('strCarBrandId');
	
		if($model != null){
			$this->activateCarbrand($model);
			return Redirect::to('/CarBrand');	
		}else{
			$this->addCarbrand($id,$mname);
			return Redirect::to('/CarBrand');	

		
		}
	}

		public function activateCarbrand($id)
	{

		$modelid=$id;
		$model = MCarBrand::find($modelid);
		$model->status='1';
		$model->save();
		
		return Redirect::to('/CarBrand');
	}


	public function reactivateCarbrand()
	{
		$id = Input::get('car_brand_id_del');
		$modelid=$id;
		$model = MCarBrand::find($modelid);
		$model->status='1';
		$model->save();
		
		return Redirect::to('/CarBrand');
	}

	public function updateCarbrand() 
	{
		$id = Input::get('car_brand_id_edit');
		//dd(Input::get('car_brand_name_edit'));
		$carbrand = MCarBrand::find($id);
		$carbrand->strCarBrandDesc = Input::get('car_brand_name_edit');
		$carbrand->save();
		
		return Redirect::to('/CarBrand');
	}

	public function deleteCarbrand() 
	{
		$getID = Input::get('car_brand_id_del');
		//dd($getID);
		$brand = MCarBrand::find($getID);
		$brand->status='0';
		$brand->save();

	return Redirect::to('/CarBrand');
	}

	public function addCarbrand() 
	{
		$id = Input::get('car_brand_id_add');
		//dd($id);
		$brand = MCarBrand::create(array(
			'strCarBrandId' => Input::get('car_brand_id_add'),
			'strCarBrandDesc' => Input::get('car_brand_name_add'),
			'status' => '1'
		));
		$brand->save();
		return Redirect::to('/CarBrand');
	}

	public function maintenanceCarmodel()
	{

		$ctr=0;
		$ids = DB::table('tblCarModel')
			->select('strCarModelId')
			->orderBy('created_at', 'desc')
			->orderBy('strCarModelId', 'desc')
			->take(1)
			->get();

		$ID = $ids["0"]->strCarModelId;
		$newID = $this->smart($ID);

		
		
		$models = DB::table('tblCarModel')
			->join('tblCarBrand', 'tblCarModel.strCMBrand','=','tblCarBrand.strCarBrandId')
			->join('tblCarType', 'tblCarModel.strCMType','=','tblCarType.strCarTypeId')
			->select('tblCarModel.*', 'tblCarType.strCarTypeName', 'tblCarBrand.strCarBrandDesc')
			->get();

			$types = MCarType::all();
			$brands = MCarBrand::all();
		//$types = MCarType::lists('strCarTypeId', 'strCarTypeName');
		//$brands = MCarBrand::lists('strCarBrandId', 'strCarBrandDesc');
		return View::make('carmodelMaintenance')->with('carModels', $models)->with('carTypes', $types)->with('carBrands', $brands)
		->with('newID', $newID)->with('ctr',$ctr);
	}

	public function modelValidate(){
		$check = true;
		$id=Input::get('car_model_id_add');
		$mname=Input::get('car_model_name_add');
		$brand = Input::get('carbrand_add');
		$type = Input::get('cartype_add');

		$model = DB::table('tblCarModel')
				->where('strCarModelDesc',$mname)
				->pluck('strCarModelId');
	
		if($model != null){
			$this->activateCarmodel($model);
			return Redirect::to('/CarModel');	
		}else{
			$this->addCarmodel($id,$mname,$brand,$type);
			return Redirect::to('/CarModel');	

		
		}
		

		
}
	public function addCarmodel($id,$mname,$brand,$type)
	{

		//$id = Input::get('car_model_id_add');
		//dd(Input::get('carbrand_add'));
		$model= MCarModel::create(array(
			'strCarModelId'=> $id,
			'strCarModelDesc'=> $mname,
			'strCMBrand'=> $brand,
			'strCMType'=> $type
		));

		$model->save();
		return Redirect::to('/CarModel');		
	}

	public function deleteCarmodel()
	{
		$id = Input::get('car_model_id_del');
		$model = MCarModel::find($id);
		$model->status='0';

		$model->save();
		return Redirect::to('/CarModel');
	}

	public function activateCarmodel($id)
	{

		$modelid=$id;
		$model = MCarModel::find($modelid);
		$model->status='1';
		$model->save();
		
		return Redirect::to('/CarModel');
	}


	public function reactivateCarmodel()
	{
		$id = Input::get('car_model_id_del');
		$modelid=$id;
		$model = MCarModel::find($modelid);
		$model->status='1';
		$model->save();
		
		return Redirect::to('/CarModel');
	}
	public function updateCarmodel()
	{
		$id = Input::get('car_model_id_edit');
		$model = MCarModel::find($id);
		$model->strCarModelDesc = Input::get('car_model_name_edit');
		$model->strCMBrand = Input::get('carbrand_edit');
		$model->strCMType = Input::get('cartype_edit');

		$model->save();
		return Redirect::to('/CarModel');
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
