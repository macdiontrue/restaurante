<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login_cliente extends Model
{
    protected $fillable = [
        'senha',
        'cliente_id',
    ];

    public function clientes(){
        return $this->belongsTo('App\Cliente');
    }
}
