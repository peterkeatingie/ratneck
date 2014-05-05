<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('videos', function($table){
                $table->increments('id');
                $table->string('title');
                $table->boolean('embedded');
                $table->string('location');
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
            Schema::drop('videos');
	}

}
