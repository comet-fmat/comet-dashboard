<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeedbackQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feedback_questions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('course_id');
			$table->text('question');
			$table->string('kind');
			$table->timestamps();
			$table->integer('position');
			$table->text('title')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('feedback_questions');
	}

}
