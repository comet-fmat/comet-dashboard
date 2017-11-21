<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubmissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('submissions', function(Blueprint $table)
		{
			$table->foreign('course_id', 'fk_rails_bcaf91aef8')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id', 'fk_rails_8d85741475')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('submissions', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_bcaf91aef8');
			$table->dropForeign('fk_rails_8d85741475');
		});
	}

}
