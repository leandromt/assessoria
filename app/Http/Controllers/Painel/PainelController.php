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
        return view('painel.painel-home');
	}

    public function index () 
    {

    	// Data
    	$titulo = 'Seja bem vindo';
    	$menu = ['item 1', 'item 2', 'item 3'];
        $desc = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, impedit.";
        $script = "<script type='text/javascript'>console.log('ae');</script>";

        // pode ser utilizado a funcao compact('titulo','menu')
    	return view('painel.painel', 
    		[
    			'titulo' => $titulo, 
    			'menu' => $menu,
                'desc' => $desc,
                'script' => $script
    		]
    	);
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
