<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('login')->unique('index_users_on_login');
			$table->text('password_hash')->nullable();
			$table->timestamps();
			$table->string('salt')->nullable();
			$table->boolean('administrator')->default(0);
			$table->text('email')->default('');
			$table->boolean('legitimate_student')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
