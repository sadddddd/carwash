<?php

class tblCarBrandSeeder extends Seeder{
	
	public function run(){
		DB::table('tblCarBrand')->delete();

		$carBrands = array (
			array(
				'strCarBrandId' => 'CBRAND0001',
				'strCarBrandDesc' => 'Toyota',
				'status'=>'1'
			),

			array(
				'strCarBrandId' => 'CBRAND0002',
				'strCarBrandDesc' => 'Suzuki',
				'status'=>'1'
			),

			array(
				'strCarBrandId' => 'CBRAND0003',
				'strCarBrandDesc' => 'Kia',
				'status'=>'1'
			)
		);
	
		DB::table('tblCarBrand')->insert($carBrands);
	}
}