<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Aluno;

class ProdutoController extends Controller
{
    private $aluno = '';

    public function __construct(Aluno $aluno)
    {
        $this->aluno = $aluno;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $aluno = new Aluno;

        $alunos = $this->aluno->all();

        return view('painel.dashboard', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "create()";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "store()";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show()";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "edit()";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "update()";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "destroy()";
    }

    public function cadastro()
    {
        /*$al = $this->aluno;
        $al->nome = "Luciano Perote";
        $al->matricula = "201005";
        $al->email = "luciano@gmail.com";
        $al->ativo = 1;
        $al->sexo = "M";
        $insert = $al->save();*/

        // $insert = $this->aluno->insert([
        $insert = $this->aluno->create([
            'nome'          => 'Dona Eridan',
            'matricula'     => '2001187',
            'email'         => 'eridan@gmail.com',
            'ativo'         => 1,
            'sexo'          => 'F'
        ]);

        if($insert)
            return "inserido com sucesso!";
        else
            return "Erro ao inserir";

    }
}
