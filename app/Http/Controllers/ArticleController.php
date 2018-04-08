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

        foreach ($articles as $p) {
            var_dump($p->Category->name);
            }
 
        //$articles = Article::all();

        //$articles = Article::where('user_id', '=', 1);

        //$articles = Category::find(1)->articles;
        //dd($articles);

// todos los articulos los que son propiedad del usuario Auth::user()
// foreach articulos
//      articulos -> name 
//      articulos -> category -> name







        /*$articles = Category::selectRaw('articles.name as art,categories.name as cat')
            ->join('articles', 'categories.id', '=', 'articles.category_id')
            ->where('articles.id', '=', 1)
            ->where('articles.user_id', '=', 1)
            //->groupBy('categories.id')
            ->get();*/


           /* $articles = Article::category('categories ct')
            ->selectRaw('categories.*, count(*) as cuenta')
            ->join('articles e', 'categories.id', '=', 'articles.category_id')
            ->where('articles.id', '=', 1)
            ->groupBy('categories.id')
            ->get();*/
            //dd($articles);
        
        /*for($i=0; $i<count($categories); $i++)
        {
            $articles = Article::where('categories_id', '=', $categories[$i]->id)
            ->orderBy('name', 'asc')
            ->get();
            $arrArticles = $arrArticles."-";
        }
        echo $arrArticles;*/
        //dd($articles);
        //return view('web.gestion_articulos', ['list' => $articles]);
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
        //
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
