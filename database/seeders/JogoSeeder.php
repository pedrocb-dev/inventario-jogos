<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Jogo;
use Illuminate\Database\Seeder;

class JogoSeeder extends Seeder
{
    public function run(): void
    {
        Jogo::create([
            'nome' => 'Catan',
            'categoria' => 'Estratégia',
            'jogadores_min' => 3,
            'jogadores_max' => 4,
            'duracao_minutos' => 90,
        ]);

        Jogo::create([
            'nome' => 'Uno',
            'categoria' => 'Cartas',
            'jogadores_min' => 2,
            'jogadores_max' => 10,
            'duracao_minutos' => 30,
        ]);
    }
}
