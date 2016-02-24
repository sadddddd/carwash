<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PackPrice extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblPackPrice', function($table){
			$table->string('strPPId')->primary();
			$table->string('strPPPack');//fk
			$table->double('dblPPrice');
			$table->double('dblPPLess');
			$table->datetime('dtmAsOf');
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
		Schema::dropIfExists('tblPackPrice');
	}

}
