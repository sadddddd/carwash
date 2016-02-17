<?php

class MCarType extends Eloquent
{
	protected $table = 'tblCarType';
	protected $primaryKey = 'strCarTypeId';
	protected $fillable = array('strCarTypeId', 'strCarTypeName', 'strCarTypeDesc', 'status');
	
	public function carmodel() {
		return $this->belongsTo('MCarModel', 'strCMType', 'strCarTypeId');
	}
}