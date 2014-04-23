<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('posts', function($table){
                $table->increments('id');
                $table->string('title');
                $table->text('content');
                $table->unsignedInteger('image_id');
                $table->unsignedInteger('created_by');
                $table->foreign('created_by')->references('id')->on('users');
                $table->timestamp('created_on')->default(DB::raw('CURRENT_TIMESTAMP'));
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('posts');
	}

}
