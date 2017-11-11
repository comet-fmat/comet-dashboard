<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFeedbackAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('feedback_answers', function(Blueprint $table)
		{
			$table->foreign('feedback_question_id', 'fk_rails_0615442e63')->references('id')->on('feedback_questions')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('submission_id', 'fk_rails_3304bbd0a0')->references('id')->on('submissions')->onUpdate('RESTRICT')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('feedback_answers', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_0615442e63');
			$table->dropForeign('fk_rails_3304bbd0a0');
		});
	}

}
