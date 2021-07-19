<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id('id_reports');
            $table->timestamps();
            // $table->string('judul');
            $table->text('alasan');
            $table->dateTime('waktu');

            // Ini buat Foreign Key
            $table->bigInteger('id_users')->unsigned();
            $table->bigInteger('id_groups')->unsigned();
            $table->bigInteger('id_utas')->unsigned();

            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_groups')->references('id_groups')->on('groups');
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
        Schema::dropIfExists('reports');
    }
}
