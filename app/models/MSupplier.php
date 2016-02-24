<?php

class MSupplier extends Eloquent
{
	protected $table = 'tblSupplier';
	protected $primaryKey = 'strSuppId';
	protected $fillable = array( 'strSuppId','strSuppName','strSuppAdd','strSuppEAdd','strSSContLName','strSSContFName','strSSContMInit','strSSCont' ,'status');
	
}