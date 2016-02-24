<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServPrice extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblServPrice', function($table){
			$table->string('strServPriceId')->primary();
			$table->double('dblServPrice');
			$table->datetime('dtmServPrice');
			$table->string('strSPServ');//fk
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
		Schema::dropIfExists('tblServPrice');
	}

}
