<?php

// php artisan make:controller Painel\\AlunoController --resource

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Aluno;

class AlunoController extends Controller
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
        
        $alunos = $this->aluno->all();

        return view('painel.alunos', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Page form for create new aluno

        return view('painel.cadastro-aluno');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Return only one field
        // $nome = $request->nome;

        // Return only one field
        // $request->input(nome);

        // Return all fields
        // dd( $request->all() );

        // Return except fields
        // $request->except(['matricula', 'status']) );

        // Return select fields
        $dataForm = $request->all();

        // Validation
        $this->validate($request, $this->aluno->rules);

        // Insert Database
        $insert = $this->aluno->create($dataForm);

        if($insert)
            return redirect()->route('alunos.index');
        else
            return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        return "ae";

        $alunoDestroy = $this->aluno->find($id);
        $delete = $alunoDestroy->delete();

        if($delete){
            return redirect()->route('alunos.index');
        }else{
            return redirect()->route('alunos.index');
        }

    }
}
