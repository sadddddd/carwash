<?php

class MProdServCat extends Eloquent
{
	protected $table = 'tblProdSerCat';
	protected $primaryKey = 'strProdSerCatId';
	protected $fillable = array( 'strProdSerCatId','strProdSerName','strProdSerDesc','status');
}