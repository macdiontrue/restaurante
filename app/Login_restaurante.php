<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login_restaurante extends Model
{
    protected $fillable = [
        'senha',
        'restaurante_id',
    ];

    public function restaurantes(){
        return $this->belongsTo('App\Restaurante');
    }
}
