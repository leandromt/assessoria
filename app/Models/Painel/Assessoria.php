<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Assessoria extends Model
{
    // Tabela alunos
    protected $table = 'tb_assessorias';

	// white list filds database
    protected $fillable = ['nome'];

    // black list filds database
    protected $guarded = [];

    //Relacinamento
    public function turma()
    {
    	return $this->belongsTo('App\Models\Painel\Turma');
    }

}
