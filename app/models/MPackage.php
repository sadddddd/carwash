<?php

class MPackage extends Eloquent
{
	protected $table = 'tblPackage';
	protected $primaryKey = 'strPackId';
<<<<<<< HEAD
	protected $fillable = array( 'strPackId','strPackName', 'status');
=======
	protected $fillable = array( 'strPackId','strPackName','strPackCateg', 'status');
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997

}