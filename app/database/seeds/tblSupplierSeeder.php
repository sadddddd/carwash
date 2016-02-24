<?php

class tblSupplierSeeder extends Seeder{
	
	public function run() {
		DB::table('tblSupplier')->delete();

		$supplier = array (
			array(

				'strSuppId' => 'SUPP0001',
				'strSuppName' => 'TBK Supplier Company',
				'strSuppAdd' => 'Visayas St.',
				'strSuppEAdd' => 'Manila City',
				'strSSContLName' => 'Vivar',
				'strSSContFName' => 'Cyres',
				'strSSContMInit' => 'J',
				'strSSCont' => '09271372671',
				'status'=>'1'
			),
			array(

				'strSuppId' => 'SUPP0002',
				'strSuppName' => 'Carwash Supplies Inc.',
				'strSuppAdd' => 'Visayas St.',
				'strSuppEAdd' => '',
				'strSSContLName' => 'Vivar',
				'strSSContFName' => 'Cyres',
				'strSSContMInit' => 'J',
				'strSSCont' => '09328437624',
				'status'=>'1'
			),
			array(

				'strSuppId' => 'SUPP0003',
				'strSuppName' => 'Autodetil Supplies Inc.',
				'strSuppAdd' => 'Visayas St.',
				'strSuppEAdd' => '',
				'strSSContLName' => 'Vivar',
				'strSSContFName' => 'Cyres',
				'strSSContMInit' => 'J',
				'strSSCont' => '09271372671',
				'status'=>'1'
			)
		);
	
		DB::table('tblSupplier')->insert($supplier);
	}
}