<?php

class MPackage extends Eloquent
{
	protected $table = 'tblPackage';
	protected $primaryKey = 'strPackId';
	protected $fillable = array( 'strPackId','strPackName', 'status');

}