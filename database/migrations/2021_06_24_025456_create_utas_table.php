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
            $table->id();
            $table->timestamps();
            $table->string('judul');
            $table->text('konten');
            $table->timestamp('waktu');
            $table->text('image_url');
            $table->integer('status');
            $table->foreignId('users_id')->nullable();
            $table->foreignId('groups_id')->nullable();
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
