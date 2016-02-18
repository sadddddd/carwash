<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//for cars
		Schema::table('tblCarModel', function($table){
			$table->foreign('strCMType')->references('strCarTypeId')->on('tblCarType');
			$table->foreign('strCMBrand')->references('strCarBrandId')->on('tblCarBrand');
		});

		Schema::table('tblCustCar', function($table){
			$table->foreign('strCCModel')->references('strCarModelId')->on('tblCarModel');
			$table->foreign('strCCCust')->references('strCustId')->on('tblCustomer');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCarModel', function ($table) {
			$table->dropColumn('strCMType');
			$table->dropColumn('strCMBrand');
		});

		Schema::table('tblCustCar', function ($table) {
			$table->dropColumn('strCCModel');
			$table->dropColumn('strCCCust');
		});	
	}

	

}