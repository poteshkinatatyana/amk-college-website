<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        $cat_id_1 = Post::where('cat_id', 1 )->get();
        $cat_id_2 = Post::where('cat_id', 2 )->get();
        $cat_id_3 = Post::where('cat_id', 3 )->get();
        $cat_id_4 = Post::where('cat_id', 4 )->get();
        $cat_id_5 = Post::where('cat_id', 5 )->get();
        $cat_id_6 = Post::where('cat_id', 6 )->get();
        $cat_id_7 = Post::where('cat_id', 7 )->get();
          
            $posts = Post::find($id);
           
            return  view('ru.post', [
                'posts' => $posts,
                'categories' => $categories,
                'cat_id_1' => $cat_id_1 ,
                'cat_id_2' => $cat_id_2 ,
                'cat_id_3' => $cat_id_3 ,
                'cat_id_4' => $cat_id_4 ,
                'cat_id_5' => $cat_id_5 ,
                'cat_id_6' => $cat_id_6 ,
                'cat_id_7' => $cat_id_7 ,
            ]);        
            
       
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
