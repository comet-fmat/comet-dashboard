<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTestCaseRunsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('test_case_runs', function(Blueprint $table)
		{
			$table->foreign('submission_id', 'fk_rails_acf794ad02')->references('id')->on('submissions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('test_case_runs', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_acf794ad02');
		});
	}

}
