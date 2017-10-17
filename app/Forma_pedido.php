<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forma_pedido extends Model
{
    protected $fillable = [
        'descricao',
    ];

    public function pedidos(){
        return $this->hasMany('App\Pedido');
    }

}
