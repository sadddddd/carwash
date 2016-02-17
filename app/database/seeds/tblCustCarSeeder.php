<?php

class tblCustCarSeeder extends Seeder{
	
	public function run(){
		DB::table('tblCustCar')->delete();

		$customerCars = array (
			array(
				'strCCCust' => 'CUST0001',
				'strCCModel' => 'CMODEL0002',
				'strCCPlateNo' => 'ABC9999',
				'status'=>'1'
			),

			array(
				'strCCCust' => 'CUST0001',
				'strCCModel' => 'CMODEL0001',
				'strCCPlateNo' => 'QWE1111',
				'status'=>'1'
			),

			array(
				'strCCCust' => 'CUST0002',
				'strCCModel' => 'CMODEL0003',
				'strCCPlateNo' => 'ABC0101',
				'status'=>'1'
			)
		);
	
		DB::table('tblCustCar')->insert($customerCars);
	}
}