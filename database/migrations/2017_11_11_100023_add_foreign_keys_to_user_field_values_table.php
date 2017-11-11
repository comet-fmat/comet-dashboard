<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserFieldValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_field_values', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_rails_2f99f81f2b')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_field_values', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_2f99f81f2b');
		});
	}

}
