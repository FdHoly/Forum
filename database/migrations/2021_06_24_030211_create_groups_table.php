<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id('id_groups');
            $table->timestamps();
            $table->string('nama')->unique();
            $table->text('deskripsi');
            $table->text('logo_url');

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
        Schema::dropIfExists('groups');
    }
}
