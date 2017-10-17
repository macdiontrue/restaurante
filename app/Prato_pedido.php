<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prato_pedido extends Model
{
    protected $fillable = [
        'quantidade',
        'preco_unitario',
        'pedido_id',
        'prato_id',
    ];
}
