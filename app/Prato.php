<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    protected $fillable = [
        'nome',
        'preco',
        'imagem',
        'descricao',
        'categoria_id',
        'restaurante_id',
    ];


    public function categorias(){
        return $this->belongsTo('App\Categoria');
    }

    public function restaurantes(){
        return $this->belongsTo('App\Restaurante');
    }
}
