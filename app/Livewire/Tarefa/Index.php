<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Database\Seeders\TarefaSeeder;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $tarefas = Tarefa::all();
        return view('livewire.tarefa.index', compact('tarefas'));
    }
}