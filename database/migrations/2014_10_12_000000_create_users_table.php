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
            $table->boolean('activated')->default(false);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('redirect_email');

            $table->string('mobile')->nullable();
            $table->string('github')->nullable();
            $table->date('birthday')->nullable();

            $table->string('language')->default('en');
            $table->string('member_status')->default('active');

            $table->dateTime('member_since')->nullable();
            $table->dateTime('last_authentication')->nullable();

            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
