<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_notifications', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('topic')->nullable();
			$table->string('message')->nullable();
			$table->integer('sender_id')->nullable();
			$table->integer('course_id')->nullable();
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
		Schema::drop('course_notifications');
	}

}
