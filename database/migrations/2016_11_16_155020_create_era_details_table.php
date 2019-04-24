<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEraDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('era_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('era_id');
			$table->text('image');
			$table->text('title');
			$table->text('serial_number');
			$table->text('registration');
			$table->text('sor_number');
			$table->text('cultural_context');
			$table->longText('style_period');
			$table->longText('desc');
			$table->text('condition');
			$table->text('measurement');
			$table->text('material');
			$table->longText('provenance');
			$table->longText('location');
			$table->text('descriptor');
			$table->longText('text_ref');
			$table->longText('technique');
			$table->text('right');
			$table->text('remarks');
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
		Schema::drop('era_details');
	}

}
