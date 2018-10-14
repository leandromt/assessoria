<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index () 
    {
    	return "aeeeeeeeee controler";
    }

    public function contato () 
    {
    	return "Contato";
    }

    public function categoria ($id = 'nao tem') 
    {
    	return "Contato " . $id;
    }
}
