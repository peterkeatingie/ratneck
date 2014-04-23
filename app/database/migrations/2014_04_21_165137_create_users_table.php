<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('users', function($table){
                $table->increments('id');
                $table->string('email')->unique();
                $table->string('first_name');
                $table->string('second_name');
                $table->unsignedInteger('role_id');
                $table->foreign('role_id')->references('id')->on('roles');
                $table->string('salt');
                $table->string('password');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('users');
	}

}
