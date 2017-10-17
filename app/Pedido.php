<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'estado',
        'total',
        'data',
        'forma_pedido_id',
        'endereco_cliente_id',
        'forma_pagamento_id',
        'restaurante_id',
    ];

    public function formasPedido(){
        return $this->belongsTo('App\Forma_pedido');
    }
    public function enderecosCliente(){
        return $this->belongsTo('App\Endereco_cliente');
    }

    public function formasPagamento(){
        return $this->belongsTo('App\Forma_pagamento');
    }

    public function restaurantes(){
        return $this->belongsTo('App\Restaurante');
    }
}
