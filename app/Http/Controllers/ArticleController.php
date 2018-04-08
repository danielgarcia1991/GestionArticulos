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
