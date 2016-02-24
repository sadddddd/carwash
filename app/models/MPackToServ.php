<?php

class MPackToServ extends Eloquent
{
	protected $table = 'tblPackToServ';
	protected $primaryKey = 'strPTSId';
	protected $fillable = array( 'strPTSId','strPTSPack' ,'strPTSServ','status');
	
	public function serv() {
		return $this->hasMany('MServ', 'strServId');
	}

	public function package() {
		return $this->hasMany('MPackage', 'strPackId');
	}

}