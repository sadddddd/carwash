<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServProd extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblServProd', function($table){
			$table->string('strSPServ');//fk
			$table->string('strSPProd'); //fk
			$table->string('strServProd');
			$table->double('dblUseProd');
			$table->boolean('status')->default('1');
			$table->timestamps();

			//composite keys
			$table->primary(array('strSPServ','strSPProd','strServProd'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::downIfExists('tblServProd');
	}

}
