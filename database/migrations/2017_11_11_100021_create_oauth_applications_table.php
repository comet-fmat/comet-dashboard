<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_applications', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->string('uid')->unique('index_oauth_applications_on_uid');
			$table->string('secret');
			$table->text('redirect_uri');
			$table->string('scopes')->default('');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_applications');
	}

}
