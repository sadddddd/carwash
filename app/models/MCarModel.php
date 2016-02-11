<?php

class MCarModel extends Eloquent
{
	protected $table = 'tblCarModel';
	protected $primaryKey = 'strCarModelId';
	protected $fillable = array( 'strCarModelDesc', 'status');
	
	public function carbmt() {
		return $this->belongsTo('MCarBMT', 'strCModel', 'strCarModelId');
	}
}