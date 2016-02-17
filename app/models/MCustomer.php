<?php

class MCustomer extends Eloquent
{
	protected $table = 'tblCustomer';
	protected $primaryKey = 'strCustId';
	protected $fillable = array( 'strCustId','strCustLName','strCustFName','strCustMInit','strCustStAdd','strCustCityAdd',
		'strCustStateAdd','strCustEmail','strCustContNo','strCustLiscNo','status');
	
	// public function cars() {
	// 	return $this->hasMany('MCustCar', 'strCustCarId');
	// }
}