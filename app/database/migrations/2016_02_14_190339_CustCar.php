<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustCar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCustCar', function($table){
			$table->string('strCCCust');
			$table->string('strCCModel');//fk
			$table->string('strCCPlateNo')->unique();
			$table->boolean('status')->default('1');
			$table->timestamps();

			//composite keys
			$table->primary(array('strCCCust','strCCModel'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblCustCar');
	}

}