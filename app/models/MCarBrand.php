<?php

class MCarBrand extends Eloquent
{
	protected $table = 'tblCarBrand';
	protected $primaryKey = 'strCarBrandId';
	protected $fillable =array('strCarBrandId','strCarBrandDesc', 'status');
	
	public function carmodel() {
		return $this->belongsTo('MCarModel', 'strCMBrand', 'strCarBrandId');
	}
}