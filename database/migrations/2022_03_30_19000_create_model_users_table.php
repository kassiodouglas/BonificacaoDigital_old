<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome',255);
            $table->string('login',255)->unique();
            $table->string('password',255);
            $table->bigInteger('id_admin')->unsigned();
            $table->bigInteger('id_perfil')->unsigned();
            $table->string('avatar',255)->nullable();


            $table->foreign('id_admin')->references('id')->on('tb_users');
            $table->foreign('id_perfil')->references('id')->on('tb_perfis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
}
