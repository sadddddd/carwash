<?php

class tblCustomerSeeder extends Seeder{
	
	public function run(){
		DB::table('tblCustomer')->delete();

		$customers = array (
			array(
				'strCustId' => 'CUST0001',
				'strCustLName' => 'Dela Cruz',
				'strCustFName' => 'Juan',
				'strCustMInit' => 'E',
				'strCustAdd' => '#13 Martinez St. Bulacan',
				
				'strCustContNo' => '09123456788',
				'strCustLiscNo' => '874549AADSFS',
				'status'=>'1'
			),

			array(
				'strCustId' => 'CUST0002',
				'strCustLName' => 'Ramirez',
				'strCustFName' => 'Sylvester',
				'strCustMInit' => 'K',
				'strCustAdd' => '#4 Quirino St. Quezon City',
				
				'strCustContNo' => '09356251633',
				'strCustLiscNo' => '874549AADSFS',
				'status'=>'1'
			),

			array(
				'strCustId' => 'CUST0003',
				'strCustLName' => 'Maneses',
				'strCustFName' => 'Enoc',
				'strCustMInit' => 'M',
				'strCustAdd' => '#19 Joliu St. Malabon City',
				'strCustContNo' => '09213764733',
				'strCustLiscNo' => '874549AADSFS',
				'status'=>'1'
			)
		);
	
		DB::table('tblCustomer')->insert($customers);
	}
}