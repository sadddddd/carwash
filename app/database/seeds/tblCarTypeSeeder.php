<?php

class tblCarTypeSeeder extends Seeder{
	
	public function run() {
		DB::table('tblCarType')->delete();

		$carTypes = array (
			array(

				'strCarTypeId' => 'CTYPE0001',
				'strCarTypeDesc' => 'Sedan',
				'status'=>'1'
			),

			array(

				'strCarTypeId' => 'CTYPE0002',
				'strCarTypeDesc' => 'AUV',
				'status'=>'1'
			),

			array(

				'strCarTypeId' => 'CTYPE0003',
				'strCarTypeDesc' => 'Van',
				'status'=>'1'
			)
		);
	
		DB::table('tblCarType')->insert($carTypes);
	}
}