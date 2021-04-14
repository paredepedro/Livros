<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->string("nickname");
            $table->integer("pontosAutor");
            $table->integer("pontosAvaliador");
            $table->string("email");
            $table->string("senha");

            //chave-estrangeira
            $table->unsignedBigInteger("id_autor");
            $table->foreign('id_autor')->references('id')->on('autores');
            $table->unsignedBigInteger("id_livro");
            $table->foreign('id_livro')->references('id')->on('livros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
