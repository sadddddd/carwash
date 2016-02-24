<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PromoServ extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblPromoServ', function($table){
			$table->string('strProServId');
			$table->string('strPSServ');//fk
			$table->string('strPSPromo');//fk
			$table->boolean('status')->default('1');
			$table->timestamps();

			//composite keys
			$table->primary(array('strProServId','strPSServ','strPSPromo'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblPromoServ');
	}

}
