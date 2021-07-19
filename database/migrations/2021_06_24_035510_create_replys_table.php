<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replys', function (Blueprint $table) {
            $table->id('id_replys');
            $table->timestamps();
            $table->dateTime('waktu');
            $table->text('konten');
            $table->text('image_url');


            // Ini buat Foreign Key
            $table->bigInteger('id_users')->unsigned();
            $table->bigInteger('id_utas')->unsigned();

            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_utas')->references('id_utas')->on('utas');
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
        Schema::dropIfExists('replys');
    }
}
