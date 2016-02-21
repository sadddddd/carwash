<?php

class tblServSeeder extends Seeder{
	
	public function run(){
		DB::table('tblServ')->delete();

		$serv = array (
			array(
				'strServId' => 'SERV0001',
				'strServName' => 'Auto Detailing',
				'strSServCat' => 'SERVCAT0002', //fk
				'strSCarType' => 'CTYPE0001', //fk
				'status'=>'1'
			),
			array(
				'strServId' => 'SERV0002',
				'strServName' => 'Car Wash',
				'strSServCat' => 'SERVCAT0001', //fk
				'strSCarType' => 'CTYPE0003', //fk
				'status'=>'1'
			)
		);
	
		DB::table('tblServ')->insert($serv);
	}
}