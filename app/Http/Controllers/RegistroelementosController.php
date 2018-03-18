<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroelementosController extends Controller
{
    public function Registroelementos()
    {
    	return view('web.Registroelementos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.crearcategoria');
    }
    
}
