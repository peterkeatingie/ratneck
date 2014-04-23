<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('thumbnails', function($table){
                $table->increments('id');
                $table->string('filename');
                $table->unsignedInteger('created_by');
                $table->foreign('created_by')->references('id')->on('users');
                $table->timestamp('created_on')->default(DB::raw('CURRENT_TIMESTAMP'));
            });
            
            Schema::create('images', function($table){
                $table->increments('id');
                $table->string('filename');
                $table->unsignedInteger('thumbnail_id');
                $table->foreign('thumbnail_id')->references('id')->on('thumbnails');
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
		//
	}

}
