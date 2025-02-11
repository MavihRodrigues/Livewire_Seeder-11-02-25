<?php

namespace Database\Seeders;

use App\Models\Tarefa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 4; $i++) {
            Tarefa::create([
                'nome' => 'Teste 1,2,3,4',
                'data_hora' => '2025-02-12 07:00:00',
                'descricao' => 'Teste de Descrição'
            ]);
        }
    }
}