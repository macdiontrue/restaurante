<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('preco');
            $table->string('imagem');
            $table->longText('descricao');
            $table->integer('categoria_id')->unsigned();
            $table->integer('restaurante_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('restaurante_id')->references('id')->on('restaurantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pratos');
    }
}
