<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $fillable = [
        'nome',
        'categoria',
        'jogadores_min',
        'jogadores_max',
        'duracao_minutos',
    ];
}
