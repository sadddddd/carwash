<?php

class MProdServCat extends Eloquent
{
	protected $table = 'tblProdSerCat';
	protected $primaryKey = 'strCategId';
	protected $fillable = array( 'strCategId','strCategName','strCategDesc','strCategType','status');
}