<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMigratedSubmissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('migrated_submissions', function(Blueprint $table)
		{
			$table->integer('from_course_id')->nullable();
			$table->integer('to_course_id')->nullable();
			$table->integer('original_submission_id')->nullable();
			$table->integer('new_submission_id')->nullable();
			$table->timestamps();
			$table->unique(['from_course_id','to_course_id','original_submission_id','new_submission_id'], 'unique_values');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('migrated_submissions');
	}

}
