<?php

class tblServCatSeeder extends Seeder{
	
	public function run() {
		DB::table('tblProdSerCat')->delete();

		$prodsercat = array (
			array(

				'strProdSerCatId' => 'SERVCAT0001',
				'strProdSerName' => 'Carwash',
				'strProdSerDesc' => 'Carwash',
				'status'=>'1'
			),
			array(

				'strProdSerCatId' => 'SERVCAT0002',
				'strProdSerName' => 'Autodetail',
				'strProdSerDesc' => 'Autodetail',
				'status'=>'1'
			),
			array(

				'strProdSerCatId' => 'SERVCAT0003',
				'strProdSerName' => 'Shampoo',
				'strProdSerDesc' => 'Shampoo',
				'status'=>'1'
			)
		);
	
		DB::table('tblProdSerCat')->insert($prodsercat);
	}
}