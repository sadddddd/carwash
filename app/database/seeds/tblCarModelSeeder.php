<?php

class tblCarModelSeeder extends Seeder{
	
	public function run(){
		DB::table('tblCarModel')->delete();

		$carModels = array (
			array(
				'strCarModelId' => 'CMODEL0001',
				'strCarModelDesc' => 'Vios',
				'status'=>'1'
			),

			array(
				'strCarModelId' => 'CMODEL0002',
				'strCarModelDesc' => 'Suzuki model1',
				'status'=>'1'
			),

			array(
				'strCarModelId' => 'CMODEL0003',
				'strCarModelDesc' => 'Kia model1',
				'status'=>'1'
			)
		);
	
		DB::table('tblCarModel')->insert($carModels);
	}
}