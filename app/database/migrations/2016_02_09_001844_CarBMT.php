<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarBMT extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCarBMT', function($table){
			$table->string('strCarBMTId');
			$table->string('strCType');//fk
			$table->string('strCBrand');//fk
			$table->string('strCModel');//fk
			$table->boolean('status')->default('1');
			$table->timestamps();

			//composite keys
			$table->primary(array('strCarBMTId','strCType','strCBrand', 'strCModel'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblCarBMT');
	}

}
