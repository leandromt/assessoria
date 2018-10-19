<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{

	public function __construct ()
	{
		// Apply Filter any methods
		// $this->middleware('auth');

		// Apply Filter only methods
		// $this->middleware('auth')->only(['usuarios']);

		// Apply Filter not int
		// $this->middleware('auth')->except(['index']);
        // return view('painel.painel-home');
	}

    public function index () 
    {

    	$page_title = 'Seja bem vindo';
        $section_title = 'Painel';

    	return view('painel.painel', compact('page_title', 'section_title'));
    }

    public function alunos () 
    {
        return view('painel.alunos');
    }

    public function aluno () 
    {
        return view('painel.aluno');
    }

    public function usuarios () 
    {
    	return "pagina de usuarios";
    }

    public function professores () 
    {
    	return "pagina de professores";
    }

    public function novoaluno ()
    {
        return view('painel.cadastro-aluno');
    }
}
