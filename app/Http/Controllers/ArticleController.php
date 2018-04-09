<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Category;
use App\model\Article;
use App\User;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Suppoort\Facades\Auth;

use Session;

class ArticleController extends Controller
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

        $articles = User::find($id)->articles;

        return view('web.gestion_articulos', ['list' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'mileage' => 'int',
            'date_expiration' => 'date_format:"Y-m-d"|required',
            'category_id' => 'required',
            ]);

        $input = $request->all();
        Article::create($input);
        Session::flash('flash_message', 'Articulo registrado con exito!');
        return redirect('/gestion_articulos');
    }

    public function article()
    {
        
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
            $article = Article::findOrFail($id);
            return view('web.buscar_articulos', ['data' => $article]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "No se pudo encontrar este articulo");
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
            $user = Auth::user();
            $id = Auth::id();        

            $categories = User::find($id)->categories;
            $article = Article::findOrFail($id);
            return view('web.editar_articulos', ['data' => $article],['list' => $categories])->with('user_id', $id);
            //return view('web.agregar_articles', ['list' => $categories])->with('user_id', $id);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "No se pudo encontrar este articulo");
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
        $article = Article::findOrFail($id);

        $this->validate($request, [
            'name' => 'required | string | max:100',
            'description' => 'required | string | max:100',
            'mileage' => 'int',
            'date_expiration' => 'date_format:"Y-m-d"|required',
            'category_id' => 'required',
            ]);

        $input = $request->all();
        $article->fill($input)->save();
        Session::flash('flash_message', 'Articulo editado con exito!');
        return redirect('/gestion_articulos');
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
            $article = Article::findOrFail($id);
            $article->delete();
            Session::flash('flash_message', 'Articulo eliminado con exito!');
            return redirect('/gestion_articulos');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El articulo no se pudo eliminar");
            return redirect()->back();
        }
    }
}
