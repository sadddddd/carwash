<?php

class MCarType extends Eloquent
{
	protected $table = 'tblCarType';
	protected $primaryKey = 'strCarTypeId';
	protected $fillable = array('strCarTypeDesc', 'status');
	
	public function carbmt() {
		return $this->belongsTo('MCarBMT', 'strCType', 'strCarTypeId');
	}
}