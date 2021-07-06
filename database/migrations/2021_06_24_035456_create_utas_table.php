<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utas', function (Blueprint $table) {
            $table->id('id_utas');
            $table->timestamps();
            $table->string('judul');
            $table->text('konten');
            $table->dateTime('waktu');
            $table->text('image_url');
            $table->integer('status');
            
            // Ini buat Foreign Key
            $table->bigInteger('id_users')->unsigned();
            $table->bigInteger('id_groups')->unsigned();

            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_groups')->references('id_groups')->on('groups');
            // Ini buat Foreign Key

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utas');
    }
}
