<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblProduct', function($table){
			$table->string('strProdId')->primary();
			$table->string('strProdName');
			$table->string('strProdDesc');
			$table->integer('intProdReOLvl');
			$table->integer('intProdStock');
			$table->string('strPCategory');//fk
			$table->string('strPSupp'); //fk
			$table->string('strPUOM'); //fk
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
		Schema::dropIfExists('tblProduct');
	}

}
