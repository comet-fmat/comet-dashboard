<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAwardedPointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('awarded_points', function(Blueprint $table)
		{
			$table->foreign('course_id', 'fk_rails_c73c8dda3d')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id', 'fk_rails_7e6a5f6efc')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('submission_id', 'fk_rails_54a884b931')->references('id')->on('submissions')->onUpdate('RESTRICT')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('awarded_points', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_c73c8dda3d');
			$table->dropForeign('fk_rails_7e6a5f6efc');
			$table->dropForeign('fk_rails_54a884b931');
		});
	}

}
