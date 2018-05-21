<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Category;
use App\User;
use Illuminate\Support\Facades\Auth;

class CategoriesApiController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = User::find(1)->categories;
        return response()->json(['error'=>true,'categories'=>$categories],200);
        //return response()->json(['status'=>true,'Great Thanks'],200);
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
        /*$this->validate($request, [
            'name' => 'required | string | max:100',
            'description',
            ]);

        $input = $request->all();
        Category::create($input);
        Session::flash('flash_message', 'Categoria registrada con exito!');
        return redirect('/Registroelementos');*/

        $category = new Category([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'user_id' => $request->input('user_id'),
        ]);
        $category->save();
        return response()->json(['status'=>true,'Great Thanks'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //devuelve una categoria por usuario
        $categories = User::find($id)->categories;
        return response()->json(['error'=>true,'categories'=>$categories],200);
        //return response()->json($categories,200);
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
