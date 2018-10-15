<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // Tabela alunos
    // protected $table = 'alunos';

	// white list filds database
    protected $fillable = ['nome', 'matricula', 'sexo', 'status'];

    // black list filds database
    protected $guarded = [];
}
