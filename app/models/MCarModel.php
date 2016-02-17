<?php

class MCarModel extends Eloquent
{
	protected $table = 'tblCarModel';
	protected $primaryKey = 'strCarModelId';
	protected $fillable = array( 'strCarModelId','strCarModelDesc','strCMType','strCMBrand','status');
	
	public function cartypes() {
		return $this->hasMany('MCarType', 'strCarTypeId');
	}

	public function carbrands() {
		return $this->hasMany('MCarBrand', 'strCarBrandId');
	}

	public function custcar() {
		return $this->belongsTo('MCustCar', 'strCCModel', 'strCarModelId');
	}
}