<?php

class MPackPrice extends Eloquent
{
	protected $table = 'tblPackPrice';
	protected $primaryKey = 'strPPId';
	protected $fillable = array( 'strPPId','strPPPack','dblPPLess' ,'dblPPrice','dtmAsOf' ,'status');


	public function package() {
		return $this->hasMany('MPackage', 'strPackId');
	}

}