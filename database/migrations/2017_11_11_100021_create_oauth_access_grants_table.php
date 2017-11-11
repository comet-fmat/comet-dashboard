<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthAccessGrantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_access_grants', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('resource_owner_id');
			$table->integer('application_id');
			$table->string('token')->unique('index_oauth_access_grants_on_token');
			$table->integer('expires_in');
			$table->text('redirect_uri');
			$table->dateTime('created_at');
			$table->dateTime('revoked_at')->nullable();
			$table->string('scopes')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_access_grants');
	}

}
