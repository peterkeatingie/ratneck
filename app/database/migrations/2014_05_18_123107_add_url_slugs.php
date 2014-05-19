<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlSlugs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::table('posts', function($table){
                    $table->string('slug');
		});
                
            Schema::table('music', function($table){
                $table->string('slug');
            });

            Schema::table('videos', function($table){
                $table->string('slug');
            });
            
            Schema::table('image_galleries', function($table){
                $table->string('slug');
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
			$table->dropColumn('slug');
		});
                
            Schema::table('music', function($table){
                    $table->dropColumn('slug');
            });

            Schema::table('videos', function($table){
                    $table->dropColumn('slug');
            });

            Schema::table('image_galleries', function($table){
                    $table->dropColumn('slug');
            });
                
              
	}

}
