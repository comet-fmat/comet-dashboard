<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFeedbackQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('feedback_questions', function(Blueprint $table)
		{
			$table->foreign('course_id', 'fk_rails_99e220604d')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('feedback_questions', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_99e220604d');
		});
	}

}
