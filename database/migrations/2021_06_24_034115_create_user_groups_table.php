<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_groups', function (Blueprint $table) {
            $table->id('id_user_groups');
            $table->timestamps();
            $table->integer('role');

            // Ini buat Foreign Key
            $table->bigInteger('id_users')->unsigned();
            $table->bigInteger('id_groups')->unsigned();

            $table->foreign('id_users')->references('id_users')->on('users')->onDelete('cascade');
            $table->foreign('id_groups')->references('id_groups')->on('groups')->onDelete('cascade');
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
        Schema::dropIfExists('user_groups');
    }
}
