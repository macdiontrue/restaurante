<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePratoPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prato_pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quantidade');
            $table->string('preco_unitario');
            $table->integer('pedido_id')->unsigned();
            $table->integer('prato_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('prato_id')->references('id')->on('pratos');
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
        Schema::dropIfExists('prato_pedido');
    }
}
