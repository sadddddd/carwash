<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('tblCarTypeSeeder');
		$this->call('tblCarBrandSeeder');
		$this->call('tblCarModelSeeder');
		$this->call('tblCustomerSeeder');
		$this->call('tblCustCarSeeder');
		$this->call('tblSupplierSeeder');
		$this->call('tblServCatSeeder');
		$this->call('tblUOMSeeder');
		$this->call('tblProductSeeder');
		$this->call('tblServSeeder');
		$this->call('tblServProdSeeder');
		$this->call('tblServPrice');
		$this->call('tblPackageSeeder');
		$this->call('tblPackPrice');
		$this->call('tblPackToServ');
	}

}
