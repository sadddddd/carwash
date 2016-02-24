<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Package extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblPackage', function($table){
			$table->string('strPackId')->primary();
<<<<<<< HEAD
=======
			$table->string('strPackCateg');
>>>>>>> 1b9db34e36ca0038c0a633e20f1aceedf4ca4997
			$table->string('strPackName');
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
		Schema::dropIfExists('tblPackage');
	}

}
