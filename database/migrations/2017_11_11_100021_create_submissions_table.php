<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubmissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submissions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->text('pretest_error')->nullable();
			$table->timestamps();
			$table->string('exercise_name');
			$table->integer('course_id');
			$table->boolean('processed')->default(0)->index('index_submissions_on_processed');
			$table->string('secret_token')->nullable();
			$table->boolean('all_tests_passed')->default(0);
			$table->text('points')->nullable();
			$table->dateTime('processing_tried_at')->nullable();
			$table->dateTime('processing_began_at')->nullable();
			$table->dateTime('processing_completed_at')->nullable();
			$table->integer('times_sent_to_sandbox')->default(0);
			$table->dateTime('processing_attempts_started_at')->nullable();
			$table->integer('processing_priority')->default(0);
			$table->binary('stdout_compressed')->nullable();
			$table->binary('stderr_compressed')->nullable();
			$table->text('params_json')->nullable();
			$table->boolean('requires_review')->default(0);
			$table->boolean('requests_review')->default(0);
			$table->boolean('reviewed')->default(0);
			$table->text('message_for_reviewer')->default('');
			$table->boolean('newer_submission_reviewed')->default(0);
			$table->boolean('review_dismissed')->default(0);
			$table->boolean('paste_available')->default(0);
			$table->text('message_for_paste')->nullable();
			$table->string('paste_key')->nullable();
			$table->dateTime('client_time')->nullable();
			$table->bigInteger('client_nanotime')->nullable();
			$table->text('client_ip')->nullable();
			$table->string('sandbox')->nullable();
			$table->index(['course_id','exercise_name'], 'index_submissions_on_course_id_and_exercise_name');
			$table->index(['course_id','user_id'], 'index_submissions_on_course_id_and_user_id');
			$table->index(['user_id','exercise_name'], 'index_submissions_on_user_id_and_exercise_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('submissions');
	}

}
