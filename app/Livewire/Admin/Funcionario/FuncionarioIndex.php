<?php

namespace App\Livewire\Admin\Funcionario;

use App\Models\Funcionario;
use Livewire\Component;

class FuncionarioIndex extends Component
{
    public function render()
    {
         $funcionarios = Funcionario::all(); //all->traz todos os dados do banco da tabela funcionarios
        return view('livewire.admin.funcionario.funcionario-index', compact('funcionarios'));
        // o compact serve para enviar os dados para a view(blade)    
}

}
