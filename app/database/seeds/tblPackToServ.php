<?php

class tblPackToServ extends Seeder{
	
	public function run(){
		DB::table('tblPackToServ')->delete();

		$packToServe = array (
			array(
				'strPTSId' => 'PTS0001',
				'strPTSServ' => 'SERV0001', //fk
				'strPTSPack' => 'PACK0001',
				'status'=>'1'
			),
			array(
				'strPTSId' => 'PTS0002',
				'strPTSServ' => 'SERV0002', //fk
				'strPTSPack' => 'PACK0002',
				'status'=>'1'
			),
			array(
				'strPTSId' => 'PTS0003',
				'strPTSServ' => 'SERV0003', //fk
				'strPTSPack' => 'PACK0003',
				'status'=>'1'
			)
		);
	
		DB::table('tblPackToServ')->insert($packToServe);
	}
}