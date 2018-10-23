<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // Tabela alunos
    protected $table = 'tb_alunos';

	// white list filds database
    protected $fillable = [];

    // black list filds database
    protected $guarded = ['matricula', 'categoria'];

    // Rules validation
    public $rules = [
    	'nome' => 'required|min:3|max:100',
    	'sexo' => 'required',
        'cpf' => 'required',
        'email' => 'required',
        'nascimento' => 'required',
        'vencimento' => 'required',
    ];

    // Relacionamento 1 para muitos
    public function turma ()
    {
        return $this->belongsTo('App\Models\Painel\Turma','id_turma','id');
    }

    

}
