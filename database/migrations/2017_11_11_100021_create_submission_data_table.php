<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubmissionDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submission_data', function(Blueprint $table)
		{
			$table->integer('submission_id')->primary('submission_data_pkey');
			$table->binary('return_file')->nullable();
			$table->binary('stdout_compressed')->nullable();
			$table->binary('stderr_compressed')->nullable();
			$table->binary('vm_log_compressed')->nullable();
			$table->binary('valgrind_compressed')->nullable();
			$table->binary('validations_compressed')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('submission_data');
	}

}
