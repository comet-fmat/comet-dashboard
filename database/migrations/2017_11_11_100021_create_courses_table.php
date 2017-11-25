<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable();
			$table->timestamps();
			$table->dateTime('hide_after')->nullable();
			$table->boolean('hidden')->default(0);
			$table->integer('cache_version')->default(0);
			$table->string('spreadsheet_key')->nullable();
			$table->dateTime('hidden_if_registered_after')->nullable();
			$table->dateTime('refreshed_at')->nullable();
			$table->boolean('locked_exercise_points_visible')->default(1);
			$table->text('description')->nullable();
			$table->string('paste_visibility')->nullable();
			$table->string('formal_name')->nullable();
			$table->boolean('certificate_downloadable')->default(0);
			$table->string('certificate_unlock_spec')->nullable();
			$table->integer('organization_id')->nullable()->index('index_courses_on_organization_id');
			$table->integer('disabled_status')->nullable()->default(1);
			$table->string('title')->nullable();
			$table->string('material_url')->nullable();
			$table->integer('course_template_id');
			$table->boolean('hide_submission_results')->nullable()->default(0);
			$table->string('external_scoreboard_url')->nullable();
			$table->boolean('initial_refresh_ready')->nullable()->default(0);
			$table->boolean('hide_submissions')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}
