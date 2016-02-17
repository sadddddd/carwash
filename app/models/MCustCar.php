<?php

class MCustCar extends Eloquent
{
	protected $table = 'tblCustCar';
	protected $primaryKey = 'strCCCust';
	protected $fillable = array( 'strCCCust','strCCModel','strCCPlateNo','status');
	
	public function carmodels() {
		return $this->hasMany('MCarModel', 'strCarModelId');
	}

	// public function owner(){
	// 	return $this->belongsTo('MCustomer', 'strCustCCId', 'strCustCarId');
	// }
}