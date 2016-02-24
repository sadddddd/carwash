<?php

class tblPackageSeeder extends Seeder{
	
	public function run(){
		DB::table('tblPackage')->delete();

		$package = array (
			array(
				'strPackId' => 'PACK0001',
				'strPackName' => 'package 01',
				'status'=>'1'
			),
			array(
				'strPackId' => 'PACK0002',
				'strPackName' => 'package 02',
				'status'=>'1'
			),
			array(
				'strPackId' => 'PACK0003',
				'strPackName' => 'package 03',
				'status'=>'1'
			)
		);
	
		DB::table('tblPackage')->insert($package);
	}
}