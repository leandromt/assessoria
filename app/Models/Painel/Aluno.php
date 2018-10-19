<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // Tabela alunos
    protected $table = 'tb_alunos';

	// white list filds database
    protected $fillable = ['nome', 'matricula', 'sexo', 'status'];

    // black list filds database
    protected $guarded = [];

    // Rules validation
    public $rules = [
    	'nome' => 'required|min:3|max:100',
    	'matricula' => 'required|min:10|max:10',
    	'sexo' => 'required'
    ];
}
