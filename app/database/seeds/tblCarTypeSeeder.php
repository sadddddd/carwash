<?php

class tblCarTypeSeeder extends Seeder{
	
	public function run() {
		DB::table('tblCarType')->delete();

		$carTypes = array (
			array(

				'strCarTypeId' => 'CTYPE0001',
				'strCarTypeName' => 'Sedan',
				'strCarTypeDesc' => 'Sedan',
				'status'=>'1'
			),

			array(

				'strCarTypeId' => 'CTYPE0002',
				'strCarTypeName' => 'AUV',
				'strCarTypeDesc' => 'AUV',
				'status'=>'1'
			),

			array(

				'strCarTypeId' => 'CTYPE0003',
				'strCarTypeName' => 'Van',
				'strCarTypeDesc' => 'Van',
				'status'=>'1'
			)
		);
	
		DB::table('tblCarType')->insert($carTypes);
	}
}