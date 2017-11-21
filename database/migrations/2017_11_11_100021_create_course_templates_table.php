<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_templates', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->string('material_url')->nullable();
			$table->string('source_url')->nullable();
			$table->boolean('dummy')->default(0);
			$table->boolean('hidden')->nullable()->default(0);
			$table->integer('cache_version')->default(0);
			$table->string('source_backend')->default('git');
			$table->string('git_branch')->default('master');
			$table->dateTime('expires_at')->nullable();
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
		Schema::drop('course_templates');
	}

}
