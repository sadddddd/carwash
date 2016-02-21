<?php

class MServ extends Eloquent
{
	protected $table = 'tblServ';
	protected $primaryKey = 'strServId';
	protected $fillable = array( 'strServId','strServName','strSServCat','strSCarType' ,'status');
	
	public function servprod() {
		return $this->hasMany('MServProd', 'strSPId');
	}
	public function servcat() {
		return $this->hasMany('MServCat', 'strServCatId');
	}
	public function cartype(){
		return $this->hasMany('MCarType','strCarTypeId');
	}
}