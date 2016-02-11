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
		Schema::table('tblCarBMT', function($table){
			$table->foreign('strCType')->references('strCarTypeId')->on('tblCarType');
			$table->foreign('strCBrand')->references('strCarBrandId')->on('tblCarBrand');
			$table->foreign('strCModel')->references('strCarModelId')->on('tblCarModel');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCarBMT', function ($table) {
			$table->dropColumn('strCType');
			$table->dropColumn('strCBrand');
			$table->dropColumn('strCModel');
		});
	}

}
