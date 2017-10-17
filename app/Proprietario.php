<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    protected $fillable = [
        'nome',
        'apelido',
        'email',
        'telefone',

    ];

    public function restaurantes(){
        return $this->hasMany('App\Restaurante');
    }
}
