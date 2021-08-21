<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('id_users');
            $table->string('name');
            $table->string('email', 250)->unique();
            $table->string('password');
            $table->integer('role');
            $table->text('biodata')->nullable();
            $table->text('profil_image_url')->nullable();
            $table->text('background_image_url')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->bigInteger('id_univ')->unsigned();
            $table->foreign('id_univ')->references('id_univ')->on('universitas');
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
