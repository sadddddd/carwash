<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PromoPack extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblPromoPack', function($table){
			$table->string('strProPackId');
			$table->string('strPPPack');//fk
			$table->string('strPPPromo');//fk
			$table->boolean('status')->default('1');
			$table->timestamps();

			//composite keys
			$table->primary(array('strProPackId','strPPPack','strPPPromo'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblPromoPack');
	}

}
