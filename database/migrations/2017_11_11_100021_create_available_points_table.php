<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvailablePointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('available_points', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('exercise_id');
			$table->string('name');
			$table->boolean('requires_review')->default(0);
			$table->unique(['exercise_id','name'], 'index_available_points_on_exercise_id_and_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('available_points');
	}

}
