<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Category;

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
        $categories = Category::all();
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
            'name' => 'required | string | alpha_dash | max:66',
            'description' => 'required | string | alpha_dash | max:6',
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
        //
    }
}
