<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Category;
use App\model\Article;

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
        //$articles = Article::all();

        //$articles = Category::find(1)->articles;

        $articles = Category::selectRaw('categories.*,articles.*')
            ->join('articles', 'categories.id', '=', 'articles.category_id')
            ->where('articles.id', '=', 1)
            //->groupBy('categories.id')
            ->get();
        
        /*for($i=0; $i<count($categories); $i++)
        {
            $articles = Article::where('categories_id', '=', $categories[$i]->id)
            ->orderBy('name', 'asc')
            ->get();
            $arrArticles = $arrArticles."-";
        }
        echo $arrArticles;*/
        dd($articles);
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
