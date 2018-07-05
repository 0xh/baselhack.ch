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
            $table->json('roles')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('language')->default(config('app.locale'));
            $table->rememberToken();
            $table->dateTime('last_authentication')->nullable();
            $table->timestamps();
            $table->dateTime('published_at')->nullable();
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
