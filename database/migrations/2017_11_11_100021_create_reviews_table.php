<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('submission_id')->index('index_reviews_on_submission_id');
			$table->integer('reviewer_id')->nullable()->index('index_reviews_on_reviewer_id');
			$table->text('review_body');
			$table->timestamps();
			$table->text('points')->nullable();
			$table->boolean('marked_as_read')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reviews');
	}

}
