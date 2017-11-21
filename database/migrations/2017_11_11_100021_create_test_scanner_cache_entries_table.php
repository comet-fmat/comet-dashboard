<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestScannerCacheEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('test_scanner_cache_entries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('course_id');
			$table->string('exercise_name')->nullable();
			$table->string('files_hash')->nullable();
			$table->text('value')->nullable();
			$table->dateTime('created_at')->nullable();
			$table->unique(['course_id','exercise_name'], 'index_test_scanner_cache_entries_on_course_id_and_exercise_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('test_scanner_cache_entries');
	}

}
