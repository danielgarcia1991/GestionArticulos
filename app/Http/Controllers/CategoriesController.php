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
        //echo "entro";
        /*$category = new Category();
        $category -> name = "prueba 2";
        $category -> description = "pru descr";
        $category -> save();*/

        return view('web.agregar_categorias');

        //$category = Category::find(1);
        
        /*$posts = Category::where('id', '>=', 1)
            ->where('description', '=', 'pru descr')
            ->orderBy('description', 'desc')
            ->get();

        $posts = Category::all();

        for($i=0; $i<count($posts); $i++)
        {
            echo $posts[$i]->name;
        }*/

        /*$posts = Category::where('id', '>=', 1)
            ->where('description', '=', 'pru descr')
            ->update(['name' => 'modificado']);*/

        
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

    public function prueba($nombre){
        echo "Hola:" . $nombre;
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
        //echo "update: ".$id;
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
        //
    }
}
