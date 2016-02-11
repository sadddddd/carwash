<?php

class MCarBrand extends Eloquent
{
	protected $table = 'tblCarBrand';
	protected $primaryKey = 'strCarBrandId';
	protected $fillable =array( 'strCarBrandDesc', 'status');
	
	public function carbmt() {
		return $this->belongsTo('MCarBMT', 'strCBrand', 'strCarBrandId');
	}
}