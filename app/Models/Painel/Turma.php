<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    // Tabela turmas
    protected $table = 'tb_turmas';


    public function alunos()
    {
        return $this->hasMany('App\Models\Painel\Aluno');
    }

}
