<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFlagsToSiteItemTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('music', function($table){
			$table->boolean('home_page');
			$table->boolean('featured');
		});
		
		Schema::table('videos', function($table){
			$table->boolean('home_page');
			$table->boolean('featured');
		});
		
		Schema::table('image_galleries', function($table){
			$table->boolean('home_page');
			$table->boolean('featured');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function($table){
			$table->dropColumn('home_page');
			$table->dropColumn('featured');
		});
		
		Schema::table('videos', function($table){
			$table->dropColumn('home_page');
			$table->dropColumn('featured');
		});
		
		Schema::table('image_galleries', function($table){
			$table->dropColumn('home_page');
			$table->dropColumn('featured');
		});
	}

}
