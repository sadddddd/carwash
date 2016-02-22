<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdSerCat extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblProdSerCat', function($table){
			$table->string('strCategId')->primary();
			$table->string('strCategName')->unique();
			$table->string('strCategDesc');
			$table->string('strCategType');
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
		Schema::dropIfExists('tblProdSerCat');
	}

}
