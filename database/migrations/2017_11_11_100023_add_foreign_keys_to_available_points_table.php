<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAvailablePointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('available_points', function(Blueprint $table)
		{
			$table->foreign('exercise_id', 'fk_rails_5c4b9d52bb')->references('id')->on('exercises')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('available_points', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_5c4b9d52bb');
		});
	}

}
