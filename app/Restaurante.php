<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'logotipo',
        'telefone',
        'descricao',
        'proprietario_id',
        'tipo_cozinha_id',
        'cidade_id',
    ];

    public function proprietarios(){
        return $this->belongsTo('App\Proprietario');
    }
    public function tiposCozinha(){
        return $this->belongsTo('App\Tipo_cozinha');
    }
    public function cidades(){
        return $this->belongsTo('App\Cidade');
    }

    public function pratos(){
        return $this->hasMany('App\Prato');
    }
}
