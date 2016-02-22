<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//for cars
		Schema::table('tblCarModel', function($table){
			$table->foreign('strCMType')->references('strCarTypeId')->on('tblCarType');
			$table->foreign('strCMBrand')->references('strCarBrandId')->on('tblCarBrand');
		});

		Schema::table('tblCustCar', function($table){
			$table->foreign('strCCModel')->references('strCarModelId')->on('tblCarModel');
			$table->foreign('strCCCust')->references('strCustId')->on('tblCustomer');
		});

		Schema::table('tblProduct', function($table){
			$table->foreign('strPCategory')->references('strCategId')->on('tblProdSerCat');
			$table->foreign('strPSupp')->references('strSuppId')->on('tblSupplier');
			$table->foreign('strPUOM')->references('strUOMId')->on('tblUOM');
		});

		Schema::table('tblServ', function($table){
			$table->foreign('strSServCat')->references('strCategId')->on('tblProdSerCat');
			$table->foreign('strSCarType')->references('strCarTypeId')->on('tblCarType');
		});

		Schema::table('tblServProd', function($table){
			$table->foreign('strSPServ')->references('strServId')->on('tblServ');
			$table->foreign('strSPProd')->references('strProdId')->on('tblProduct');
		});

		Schema::table('tblServPrice', function($table){
			$table->foreign('strSPServ')->references('strServId')->on('tblServ');
		});

		Schema::table('tblPackToServ', function($table){
			$table->foreign('strPTSPack')->references('strPackId')->on('tblPackage');
			$table->foreign('strPTSServ')->references('strServId')->on('tblServ');
		});

		Schema::table('tblPackPrice', function($table){
			$table->foreign('strPPPack')->references('strPackId')->on('tblPackage');
		});

		Schema::table('tblCardFreq', function($table){
			$table->foreign('strCFCard')->references('strCardId')->on('tblCard');
		});

		Schema::table('tblPackFreq', function($table){
			$table->foreign('strPFPack')->references('strPackId')->on('tblPackage');
			$table->foreign('strPFFreq')->references('strCFId')->on('tblCardFreq');
		});

		Schema::table('tblPromoServ', function($table){
			$table->foreign('strPSServ')->references('strServId')->on('tblServ');
			$table->foreign('strPSPromo')->references('strPromoId')->on('tblPromo');
		});

		Schema::table('tblPromoPack', function($table){
			$table->foreign('strPPPack')->references('strPackId')->on('tblPackage');
			$table->foreign('strPPPromo')->references('strPromoId')->on('tblPromo');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblCarModel', function ($table) {
			$table->dropColumn('strCMType');
			$table->dropColumn('strCMBrand');
		});

		Schema::table('tblCustCar', function ($table) {
			$table->dropColumn('strCCModel');
			$table->dropColumn('strCCCust');
		});	

		Schema::table('tblProduct', function ($table) {
			$table->dropColumn('strPCategory');
			$table->dropColumn('strPSupp');
			$table->dropColumn('strPUOM');
		});

		Schema::table('tblServ', function ($table) {
			$table->dropColumn('strSServCat');
			$table->dropColumn('strSCarType');
		});

		Schema::table('tblServProd', function ($table) {
			$table->dropColumn('strSPServ');
			$table->dropColumn('strSPProd');
		});	

		Schema::table('tblServPrice', function ($table) {
			$table->dropColumn('strSPServ');
		});	

		Schema::table('tblPackToServ', function ($table) {
			$table->dropColumn('strPTSPack');
			$table->dropColumn('strPTSServ');
		});	

		Schema::table('tblPackPrice', function ($table) {
			$table->dropColumn('strPPPack');
		});	

		Schema::table('tblCardFreq', function ($table) {
			$table->dropColumn('strCFCard');
		});	

		Schema::table('tblPackFreq', function ($table) {
			$table->dropColumn('strPFPack');
			$table->dropColumn('strPFFreq');
		});	

		Schema::table('tblPromoServ', function ($table) {
			$table->dropColumn('strPSServ');
			$table->dropColumn('strPSPromo');
		});	

		Schema::table('tblPromoPack', function ($table) {
			$table->dropColumn('strPPPack');
			$table->dropColumn('strPPPromo');
		});	
	}
}