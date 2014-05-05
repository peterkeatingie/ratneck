<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageGalleriesImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('image_galleries_images', function($table){
                $table->increments('id');
                $table->unsignedInteger('image_gallery_id');
                $table->foreign('image_gallery_id')->references('id')->on('image_galleries');
                $table->unsignedInteger('image_id');
                $table->foreign('image_id')->references('id')->on('images');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('image_galleries_images');
	}

}
