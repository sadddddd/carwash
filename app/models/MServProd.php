<?php

class MServProd extends Eloquent
{
	protected $table = 'tblServProd';
	protected $primaryKey = 'strServProd';
	protected $fillable = array( 'strServProd','strSPServ','strSPProd','dblUseProd','status');

	public function product() {
		return $this->hasMany('MProduct', 'strProdId');
	}

	public function service() {
		return $this->hasMany('MServ', 'strServId');
	}

}