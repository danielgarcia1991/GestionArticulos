<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Category;
use App\User;
use Illuminate\Support\Facades\Auth;

use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();

        $categories = User::find($id)->categories;

        return view('web.Registroelementos', ['list' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.agregar_categorias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required | string | max:100',
            'description' => 'required | string | max:100',
            ]);

        $input = $request->all();
        Category::create($input);
        Session::flash('flash_message', 'Categoria registrada con exito!');
        return redirect('/Registroelementos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $category = Category::findOrFail($id);
            return view('web.buscar_categorias', ['data' => $category]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "No se pudo encontrar esta categoria");
            return redirect()->back();
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $category = Category::findOrFail($id);
            return view('web.editar_categorias', ['data' => $category]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "No se pudo encontrar esta categoria");
            return redirect()->back();
        }
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
        $category = Category::findOrFail($id);

        $this->validate($request, [
            'name' => 'required | string | max:100',
            'description' => 'required | string | max:100',
            ]);

        $input = $request->all();
        $category->fill($input)->save();
        Session::flash('flash_message', 'Categoria editada con exito!');
        return redirect('/Registroelementos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $category = Category::findOrFail($id);
            $category->delete();
            Session::flash('flash_message', 'Categoria eliminada con exito!');
            return redirect('/Registroelementos');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "La categoria no se pudo eliminar");
            return redirect()->back();
        }
    }
}
