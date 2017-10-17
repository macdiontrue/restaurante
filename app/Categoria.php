<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome',
        'tipo_cozinha_id',
    ];

    public function tipoCozinha(){
        return $this->belongsTo('App\Tipo_cozinha');
    }

    public function pratos(){
        return $this->hasMany('App\Prato');
    }

}
