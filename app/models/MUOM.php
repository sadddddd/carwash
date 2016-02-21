<?php

class MUOM extends Eloquent
{
	protected $table = 'tblUOM';
	protected $primaryKey = 'strUOMId';
	protected $fillable = array( 'strUOMId','strUOMDesc','dblUOM' ,'status');
}