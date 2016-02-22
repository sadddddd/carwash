<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblCustomer', function($table){
			$table->string('strCustId')->primary();
			$table->string('strCustLName');
			$table->string('strCustFName');
			$table->string('strCustMInit');
			$table->string('strCustAdd');
			$table->string('strCustContNo');
			$table->string('strCustLiscNo');
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
		Schema::dropIfExists('tblCustomer');
	}

}