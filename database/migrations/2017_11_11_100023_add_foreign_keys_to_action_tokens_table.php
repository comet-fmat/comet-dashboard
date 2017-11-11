<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToActionTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('action_tokens', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_rails_2356701f07')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('action_tokens', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_2356701f07');
		});
	}

}
