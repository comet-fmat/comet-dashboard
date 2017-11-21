<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeedbackAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feedback_answers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('feedback_question_id');
			$table->integer('course_id');
			$table->string('exercise_name');
			$table->integer('submission_id')->nullable()->index('index_feedback_answers_question');
			$table->text('answer');
			$table->timestamps();
			$table->index(['feedback_question_id','course_id','exercise_name'], 'index_feedback_answers_question_course_exercise');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('feedback_answers');
	}

}
