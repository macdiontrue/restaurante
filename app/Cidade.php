<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [
        'nome',
        'sigla',
    ];


    public function restaurantes(){
        return $this->hasMany('App\Restaurante');
    }

}
