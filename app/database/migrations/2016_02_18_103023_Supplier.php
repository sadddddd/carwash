<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Supplier extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblSupplier', function($table){
			$table->string('strSuppId')->primary();
			$table->string('strSuppName');
			$table->string('strSuppAdd');
			$table->string('strSuppEAdd');
			$table->String('strSSContLName');
			$table->String('strSSContFName');
			$table->String('strSSContMInit');
			$table->String('strSSCont');
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
		Schema::dropIfExists('tblSupplier');
	}

}
