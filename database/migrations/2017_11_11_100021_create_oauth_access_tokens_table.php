<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthAccessTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_access_tokens', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('resource_owner_id')->nullable()->index('index_oauth_access_tokens_on_resource_owner_id');
			$table->integer('application_id')->nullable();
			$table->string('token')->unique('index_oauth_access_tokens_on_token');
			$table->string('refresh_token')->nullable()->unique('index_oauth_access_tokens_on_refresh_token');
			$table->integer('expires_in')->nullable();
			$table->dateTime('revoked_at')->nullable();
			$table->dateTime('created_at');
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
		Schema::drop('oauth_access_tokens');
	}

}
