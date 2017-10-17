<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'descricao',
    ];



    public function enderecos(){
        return $this->hasMany('App\Endereco_cliente');
    }

}
