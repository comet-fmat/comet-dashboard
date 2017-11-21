<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTestScannerCacheEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('test_scanner_cache_entries', function(Blueprint $table)
		{
			$table->foreign('course_id', 'fk_rails_5047ff1d79')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('test_scanner_cache_entries', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_5047ff1d79');
		});
	}

}
