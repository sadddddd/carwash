<?php

class MProduct extends Eloquent
{
	protected $table = 'tblProduct';
	protected $primaryKey = 'strProdId';
<<<<<<< HEAD
	protected $fillable = array( 'strProdId','strProdName','strProdDesc','intProdReOLvl','strPCategory','strPSupp','strPUOM' ,'status');
=======
	protected $fillable = array( 'strProdId','strProdName','strProdDesc','intProdReOLvl','strPCategory','strPSupp','strPUOM','intProdStock' ,'status');
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
	
	public function supplier() {
		return $this->hasMany('MSupplier', 'strSuppId');
	}
	public function UOM() {
		return $this->hasMany('MUOM', 'strUOMId');
	}

	public function categories() {
		return $this->hasMany('MProdServCat', 'strProdSerCatId');
	}

}