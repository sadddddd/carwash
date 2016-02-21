<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServCardFreq extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblServFreq', function($table){
			$table->string('strSFId');
			$table->string('strSFServ');//fk
			$table->string('strSFFreq');//fk
			$table->boolean('status')->default('1');
			$table->timestamps();

			//composite keys
			$table->primary(array('strSFId','strSFServ','strSFFreq'));
		});

		Schema::table('tblServFreq', function($table){
			$table->foreign('strSFServ')->references('strServId')->on('tblServ');
			$table->foreign('strSFFreq')->references('strCFId')->on('tblCardFreq');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblServFreq');

		Schema::table('tblServFreq', function ($table) {
			$table->dropColumn('strSFServ');
			$table->dropColumn('strSFFreq');
		});	
	}

}
