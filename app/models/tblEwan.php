<?php

class tblEwan extends Eloquent
{
	protected $table = 'tblEwan';
	protected $primaryKey = 'strPrimary';
	protected $fillable = array('strString','intInteger');
}