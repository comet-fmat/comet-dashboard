<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnlocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unlocks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->integer('course_id');
			$table->string('exercise_name');
			$table->dateTime('valid_after')->nullable();
			$table->dateTime('created_at');
			$table->unique(['user_id','course_id','exercise_name'], 'index_unlocks_on_user_id_and_course_id_and_exercise_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unlocks');
	}

}
