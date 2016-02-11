<?php

class MCarBMT extends Eloquent
{
	protected $table = 'tblCarBMT';
	protected $primaryKey = 'tblCarBMTId';
	protected $fillable = array( 'strCType', 'strCBrand', 'strCModel', 'status');

	public function cartype() {
		return $this->hasMany('MCarType', 'strCarTypeId');
	}

	public function carbrand() {
		return $this->hasMany('MCarBrand', 'strCarBrandId');
	}

	public function carmodel() {
		return $this->hasMany('MCarModel', 'strCarModelId');
	}
	
}