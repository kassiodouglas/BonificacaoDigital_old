<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelMovimentacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_movimentacoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_tipo')->unsigned();
            $table->decimal('valor',10,2)->unsigned();
            $table->text('observacao');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_admin')->unsigned();

            $table->foreign('id_user')->references('id')->on('tb_users');
            $table->foreign('id_admin')->references('id')->on('tb_users');
            $table->foreign('id_tipo')->references('id')->on('tb_tipos_movimentacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_movimentacoes');
    }
}
