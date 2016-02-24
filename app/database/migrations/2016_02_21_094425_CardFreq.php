<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CardFreq extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCardFreq', function($table){
			$table->string('strCFId')->primary();
			$table->string('strCFDesc');
			$table->double('dblCFDisc');
			$table->boolean('boolCFUsed');
			$table->string('strCFCard'); //fk
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
		Schema::dropIfExists('tblCardFreq');
	}

}
