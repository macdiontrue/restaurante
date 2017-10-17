<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_restaurantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('senha');
            $table->integer('restaurante_id')->unsigned();
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
        Schema::dropIfExists('login_restaurantes');
    }
}
