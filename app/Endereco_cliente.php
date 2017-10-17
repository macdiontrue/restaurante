<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco_cliente extends Model
{
    protected $fillable = [
        'bairro',
        'avenida',
        'rua',
        'numero',
        'cliente_id',
    ];

    public function clientes(){
        return $this->belongsTo('App\Cliente');
    }

}
