<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("conteudo");
            $table->string("titulo");
            $table->date("data");
            $table->integer("quantLike");

            //chave-estrangeira
            $table->unsignedBigInteger("id_usuario");
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->unsignedBigInteger("id_livro");
            $table->foreign('id_livro')->references('id')->on('livros');
            $table->unsignedBigInteger("id_comentario");
            $table->foreign('id_comentario')->references('id')->on('comentarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacoes');
    }
}
