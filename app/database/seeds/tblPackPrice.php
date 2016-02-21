<?php

class tblPackPrice extends Seeder{
	
	public function run(){
		DB::table('tblPackPrice')->delete();

		$packPrice = array (
			array(
				'strPPId' => 'PP0001',
				'strPPPack' => 'PACK0001'
				'dblPPLess' => '100.00'
				'dblPPrice' => '300.00',
				'datetime' => '2013-01-01 00:00:00',
				'status'=>'1'
			),
			array(
				'strPPId' => 'PP0002',
				'strPPPack' => 'PACK0002'
				'dblPPLess' => '200.00'
				'dblPPrice' => '700.00',
				'datetime' => '2013-01-01 00:00:00',
				'status'=>'1'
			),
			array(
				'strPPId' => 'PP0002',
				'strPPPack' => 'PACK0003'
				'dblPPLess' => '150.00'
				'dblPPrice' => '500.00',
				'datetime' => '2013-01-01 00:00:00',
				'status'=>'1'
			)
		);
	
		DB::table('tblPackPrice')->insert($packPrice);
	}
}