<?php

class tblProductSeeder extends Seeder{
	
	public function run(){
		DB::table('tblProduct')->delete();

		$product = array (
			array(
				'strProdId' => 'PROD0001',
				'strProdName' => 'TBK Shampoo',
				'strProdDesc' => 'for car cleaning purposes',
				'intProdReOLvl' => '10',
				'strPCategory' => 'CAT0001',
				'strPSupp' => 'SUPP0001',
				'strPUOM' => 'UOM0001',
				'status'=>'1'
			),
			array(
				'strProdId' => 'PROD0002',
				'strProdName' => 'TBK Soap',
				'strProdDesc' => 'for car cleaning purposes',
				'intProdReOLvl' => '10',
				'strPCategory' => 'CAT0001',
				'strPSupp' => 'SUPP0002',
				'strPUOM' => 'UOM0003',
				'status'=>'1'
			)
		);
	
		DB::table('tblProduct')->insert($product);
	}
}