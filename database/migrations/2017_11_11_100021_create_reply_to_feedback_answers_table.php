<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReplyToFeedbackAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reply_to_feedback_answers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('feedback_answer_id')->nullable();
			$table->text('body')->nullable();
			$table->string('from')->nullable();
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
		Schema::drop('reply_to_feedback_answers');
	}

}
