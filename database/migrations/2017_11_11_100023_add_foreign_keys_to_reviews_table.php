<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reviews', function(Blueprint $table)
		{
			$table->foreign('submission_id', 'fk_rails_75ee3b2fca')->references('id')->on('submissions')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('reviewer_id', 'fk_rails_007031d9cb')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reviews', function(Blueprint $table)
		{
			$table->dropForeign('fk_rails_75ee3b2fca');
			$table->dropForeign('fk_rails_007031d9cb');
		});
	}

}
