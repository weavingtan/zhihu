<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('avatar');
            $table->smallInteger('is_active')->default(0);
            $table->string('confirmation_token');
            $table->string('password');
            $table->integer('questions_count')->defualt(0);
            $table->integer('answers_count')->defualt(0);
            $table->integer('comments_count')->defualt(0);
            $table->integer('favorites_count')->defualt(0);
            $table->integer('likes_count')->defualt(0);
            $table->integer('followers_count')->defualt(0);
            $table->integer('followerings_count')->defualt(0);
            $table->json('settings')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
