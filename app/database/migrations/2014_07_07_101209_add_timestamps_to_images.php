<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampsToImages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('thumbnails', function($table){
			$table->dropColumn('created_on');
		});
		
		Schema::table('images', function($table){
			$table->dropColumn('created_on');
		});
		
		Schema::table('image_galleries', function($table){
			$table->dropColumn('created_on');
		});
		
		Schema::table('thumbnails', function($table){
                $table->timestamps();
            });

		Schema::table('images', function($table){
                $table->timestamps();
            });		

		Schema::table('image_galleries', function($table){
                $table->timestamps();
            });				
			
		Schema::table('image_galleries_images', function($table){
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
		//
	}

}
