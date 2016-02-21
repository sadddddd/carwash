<?php

class tblUOMSeeder extends Seeder{
	
	public function run(){
		DB::table('tblUOM')->delete();

		$UOM = array (
			array(
				'strUOMId' => 'UOM0001',
				'strUOMDesc' => 'Litre',
				'dblUOM' => '2',
				'status'=>'1'
			),
			array(
				'strUOMId' => 'UOM0002',
				'strUOMDesc' => 'Bottle',
				'dblUOM' => '1',
				'status'=>'1'
			),
			array(
				'strUOMId' => 'UOM0003',
				'strUOMDesc' => 'Piece',
				'dblUOM' => '1',
				'status'=>'1'
			)
		);
	
		DB::table('tblUOM')->insert($UOM);
	}
}