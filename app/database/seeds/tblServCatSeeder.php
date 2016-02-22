<?php

class tblServCatSeeder extends Seeder{
	
	public function run() {
		DB::table('tblProdSerCat')->delete();

		$prodsercat = array (
			array(

				'strCategId' => 'CAT0001',
				'strCategName' => 'Carwash',
				'strCategDesc' => 'Carwash',
				'strCategType' => '1',
				'status'=>'1'
			),
			array(

				'strCategId' => 'CAT0002',
				'strCategName' => 'Autodetailing',
				'strCategDesc' => '',
				'strCategType' => '1',
				'status'=>'1'
			),
			array(
				'strCategId' => 'CAT0003',
				'strCategName' => 'Shampoo',
				'strCategDesc' => '',
				'strCategType' => '2',
				'status'=>'1'
			)
		);
	
		DB::table('tblProdSerCat')->insert($prodsercat);
	}
}