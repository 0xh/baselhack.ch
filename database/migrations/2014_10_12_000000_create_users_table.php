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
            $table->uuid('uuid')->uniquie();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('language')->default(config('app.locale'));
            $table->json('roles')->nullable();
            $table->json('notifications')->nullable();
            $table->rememberToken();
            $table->dateTime('last_authenticated')->nullable();
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
