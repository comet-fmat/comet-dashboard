<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubmissionDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('submission_data', function(Blueprint $table)
		{
			$table->foreign('submission_id', 'fk_rails_0b38a74c44')->references('id')->on('submissions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('submission_data', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_0b38a74c44');
		});
	}

}
