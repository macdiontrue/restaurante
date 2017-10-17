<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_cozinha extends Model
{
    protected $fillable = [
        'nome',

    ];

    public function categorias(){
        return $this->hasMany('App\Categoria');
    }

    public function restaurantes(){
        return $this->hasMany('App\Restaurante');
    }

}
