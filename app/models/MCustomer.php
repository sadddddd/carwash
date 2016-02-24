<?php

class MCustomer extends Eloquent
{
	protected $table = 'tblCustomer';
	protected $primaryKey = 'strCustId';
<<<<<<< HEAD
	protected $fillable = array( 'strCustId','strCustLName','strCustFName','strCustMInit','strCustAdd','strCustEmail','strCustContNo','strCustLiscNo','status');
=======
	protected $fillable = array( 'strCustId','strCustLName','strCustFName','strCustMInit','strCustAdd','strCustContNo','strCustLiscNo','status');
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
	
	// public function cars() {
	// 	return $this->hasMany('MCustCar', 'strCustCarId');
	// }
}