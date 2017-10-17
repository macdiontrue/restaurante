<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado');
            $table->string('total');
            $table->date('data');
            $table->integer('forma_pedido_id')->unsigned();
            $table->integer('endereco_cliente_id')->unsigned();
            $table->integer('forma_pagamento_id')->unsigned();
            $table->integer('restaurante_id')->unsigned();
            $table->foreign('forma_pedido_id')->references('id')->on('forma_pedidos');
            $table->foreign('endereco_cliente_id')->references('id')->on('endereco_clientes');
            $table->foreign('forma_pagamento_id')->references('id')->on('forma_pagamentos');
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
        Schema::dropIfExists('pedidos');
    }
}
