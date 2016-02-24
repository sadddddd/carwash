<?php

class MProduct extends Eloquent
{
	protected $table = 'tblProduct';
	protected $primaryKey = 'strProdId';
	protected $fillable = array( 'strProdId','strProdName','strProdDesc','intProdReOLvl','strPCategory','strPSupp','strPUOM' ,'status');
	
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