<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAwardedPointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('awarded_points', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('course_id');
			$table->integer('user_id');
			$table->integer('submission_id')->nullable();
			$table->string('name');
			$table->dateTime('created_at')->nullable();
			$table->unique(['user_id','submission_id','name'], 'index_awarded_points_on_user_id_and_submission_id_and_name');
			$table->unique(['course_id','user_id','name'], 'index_awarded_points_on_course_id_and_user_id_and_name');
			$table->index(['course_id','user_id','submission_id'], 'index_awarded_points_on_course_id_and_user_id_and_submission_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('awarded_points');
	}

}
