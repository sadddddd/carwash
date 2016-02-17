<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarModel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCarModel', function($table){
			$table->string('strCarModelId')->primary();
			$table->string('strCarModelDesc')->unique();
			$table->string('strCMType');//fk
			$table->string('strCMBrand');//fk
			$table->boolean('status')->default('1');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblCarModel');
	}

}
