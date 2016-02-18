<?php

class MSupplier extends Eloquent
{
	protected $table = 'tblSupplier';
	protected $primaryKey = 'strSuppId';
	protected $fillable = array( 'strSuppId','strSuppName','strSuppStAdd','strSuppCityAdd','strSuppStateAdd',
		'strSuppEAdd','strSSContLName','strSSContFName','strSSContMInit','strSSCont' ,'status');
	
}