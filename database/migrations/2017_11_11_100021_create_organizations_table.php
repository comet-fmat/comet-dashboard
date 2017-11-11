<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->string('information')->nullable();
			$table->string('slug')->nullable();
			$table->dateTime('verified_at')->nullable();
			$table->boolean('verified')->nullable();
			$table->boolean('disabled')->default(0);
			$table->string('disabled_reason')->nullable();
			$table->timestamps();
			$table->boolean('hidden')->nullable()->default(0);
			$table->integer('creator_id')->nullable();
			$table->string('logo_file_name')->nullable();
			$table->string('logo_content_type')->nullable();
			$table->integer('logo_file_size')->nullable();
			$table->dateTime('logo_updated_at')->nullable();
			$table->string('phone')->nullable();
			$table->text('contact_information')->nullable();
			$table->string('email')->nullable();
			$table->text('website')->nullable();
			$table->boolean('pinned')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('organizations');
	}

}
