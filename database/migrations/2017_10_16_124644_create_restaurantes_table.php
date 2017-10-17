<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('logotipo');
            $table->string('telefone');
            $table->longText('descricao');
            $table->integer('proprietario_id')->unsigned();
            $table->integer('tipo_cozinha_id')->unsigned();
            $table->integer('cidade_id')->unsigned();
            $table->foreign('proprietario_id')->references('id')->on('proprietarios');
            $table->foreign('tipo_cozinha_id')->references('id')->on('tipo_cozinhas');
            $table->foreign('cidade_id')->references('id')->on('cidades');
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
        Schema::dropIfExists('restaurantes');
    }
}
