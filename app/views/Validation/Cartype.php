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