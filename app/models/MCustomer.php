<?php

class MCustomer extends Eloquent
{
	protected $table = 'tblCustomer';
	protected $primaryKey = 'strCustId';
	protected $fillable = array( 'strCustId','strCustLName','strCustFName','strCustMInit','strCustAdd','strCustContNo','strCustLiscNo','status');
	
	// public function cars() {
	// 	return $this->hasMany('MCustCar', 'strCustCarId');
	// }
}