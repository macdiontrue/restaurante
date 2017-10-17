<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forma_pagamento extends Model
{
    protected $fillable = [
        'descricao',
    ];


    public function pedidos(){
        return $this->hasMany('App\Pedido');
    }
}
