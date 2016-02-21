<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PackCardFreq extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblPackFreq', function($table){
			$table->string('strPFId');
			$table->string('strPFPack');//fk
			$table->string('strPFFreq');//fk
			$table->boolean('status')->default('1');
			$table->timestamps();

			//composite keys
			$table->primary(array('strPFId','strPFPack','strPFFreq'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblPackFreq');
	}

}
