<?php

class tblServProdSeeder extends Seeder{
	
	public function run(){
		DB::table('tblServProd')->delete();

		$servProd = array (
			array(
				'strSPServ' => 'SERV0001',
				'strSPProd' => 'PROD0001',
				'strServProd' => 'SP0001',
				'dblUseProd' => '56',
				'status'=>'1'
			),
			array(
				'strSPServ' => 'SERV0002',
				'strSPProd' => 'PROD0002',
				'strServProd' => 'SP0002',
				'dblUseProd' => '12',
				'status'=>'1'
			)
		);
	
		DB::table('tblServProd')->insert($servProd);
	}
}