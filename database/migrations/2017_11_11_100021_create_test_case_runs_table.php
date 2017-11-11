<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestCaseRunsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('test_case_runs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('submission_id')->nullable()->index('index_test_case_runs_on_submission_id');
			$table->text('test_case_name')->nullable();
			$table->text('message')->nullable();
			$table->boolean('successful')->nullable();
			$table->timestamps();
			$table->text('exception')->nullable();
			$table->text('detailed_message')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('test_case_runs');
	}

}
