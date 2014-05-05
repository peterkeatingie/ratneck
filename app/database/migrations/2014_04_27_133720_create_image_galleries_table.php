<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageGalleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('image_galleries', function($table){
                $table->increments('id');
                $table->string('name');
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
            Schema::drop('image_galleries');
	}

}
