<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        $user = Auth::user();
        $id = Auth::id();

        $users = User::all();

        return view('web.agregar_categorias', ['list' => $users])->with('user_id', $id)->with('type_user', $user->type);
    }
    
}
