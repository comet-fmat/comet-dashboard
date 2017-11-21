<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUncomputedUnlocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uncomputed_unlocks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('course_id');
			$table->integer('user_id');
			$table->timestamps();
			$table->index(['course_id','user_id'], 'index_uncomputed_unlocks_on_course_id_and_user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uncomputed_unlocks');
	}

}
