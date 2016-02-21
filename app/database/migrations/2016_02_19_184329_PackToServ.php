<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PackToServ extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblPackToServe', function($table){
			$table->string('strPTSId');
			$table->string('strPTSPack');//fk
			$table->string('strPTSServ');//fk
			$table->boolean('status')->default('1');
			$table->timestamps();

			//composite keys
			$table->primary(array('strPTSId','strPTSPack','strPTSServ'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblPackToServe');
	}

}
