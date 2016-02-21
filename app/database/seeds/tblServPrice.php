<?php

class tblServPrice extends Seeder{
	
	public function run() {
		DB::table('tblServPrice')->delete();

		$servPrice = array (
			array(

				'strServPriceId' => 'SP0001',
				'dblServPrice' => '200.00',
				'dtmServPrice' => '2016-12-01 00:00:00',
				'strSPServ' => 'SERV0001',//fk
				'status'=>'1'
			),
			array(

				'strServPriceId' => 'SP0002',
				'dblServPrice' => '500.00',
				'dtmServPrice' => '2016-07-05 00:00:00',
				'strSPServ' => 'SERV0002',//fk
				'status'=>'1'
			)
		);
	
		DB::table('tblServPrice')->insert($servPrice);
	}
}