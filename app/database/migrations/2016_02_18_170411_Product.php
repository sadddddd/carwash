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
<<<<<<< HEAD
=======
			$table->integer('intProdStock');
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
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
