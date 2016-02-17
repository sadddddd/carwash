<?php

class tblCarModelSeeder extends Seeder{
	
	public function run(){
		DB::table('tblCarModel')->delete();

		$carModels = array (
			array(
				'strCarModelId' => 'CMODEL0001',
				'strCarModelDesc' => 'Vios',
				'strCMType' => 'CTYPE0002',
				'strCMBrand' => 'CBRAND0001',
				'status'=>'1'
			),

			array(
				'strCarModelId' => 'CMODEL0002',
				'strCarModelDesc' => 'Suzuki model1',
				'strCMType' => 'CTYPE0001',
				'strCMBrand' => 'CBRAND0002',
				'status'=>'1'
			),

			array(
				'strCarModelId' => 'CMODEL0003',
				'strCarModelDesc' => 'Kia model1',
				'strCMType' => 'CTYPE0003',
				'strCMBrand' => 'CBRAND0003',
				'status'=>'1'
			)
		);
	
		DB::table('tblCarModel')->insert($carModels);
	}
}