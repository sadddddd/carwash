<?php

class MServPrice extends Eloquent
{
	protected $table = 'tblServPrice';
	protected $primaryKey = 'strServPriceId';
	protected $fillable =array('strServPriceId','dblServPrice','dtmServPrice','strSPServ' ,'status');
	
	public function service() {
		return $this->belongsTo('MServ', 'strServId');
	}
}