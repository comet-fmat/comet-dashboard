<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExercisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercises', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->timestamps();
			$table->integer('course_id')->nullable();
			$table->dateTime('publish_time')->nullable();
			$table->string('gdocs_sheet')->nullable()->index('index_exercises_on_gdocs_sheet');
			$table->boolean('hidden')->default(0);
			$table->boolean('returnable_forced')->nullable();
			$table->string('checksum')->default('');
			$table->dateTime('solution_visible_after')->nullable();
			$table->boolean('has_tests')->default(0);
			$table->text('deadline_spec')->nullable();
			$table->text('unlock_spec')->nullable();
			$table->string('runtime_params')->default('[]');
			$table->string('valgrind_strategy')->nullable();
			$table->boolean('code_review_requests_enabled')->default(0);
			$table->boolean('run_tests_locally_action_enabled')->default(1);
			$table->text('soft_deadline_spec')->nullable();
			$table->integer('disabled_status')->nullable()->default(0);
			$table->boolean('hide_submission_results')->nullable()->default(0);
			$table->unique(['course_id','name'], 'index_exercises_on_course_id_and_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exercises');
	}

}
