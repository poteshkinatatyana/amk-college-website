<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostKz;
use App\Models\CategoryKz;

class PageKzController extends Controller
{
    public function show($id)
    {
        $categories = CategoryKz::orderBy('created_at', 'desc')->get();

        $cat_id_1 = PostKz::where('cat_id', 1 )->get();
        $cat_id_2 = PostKz::where('cat_id', 2 )->get();
        $cat_id_3 = PostKz::where('cat_id', 3 )->get();
        $cat_id_4 = PostKz::where('cat_id', 4 )->get();
        $cat_id_5 = PostKz::where('cat_id', 5 )->get();
        $cat_id_6 = PostKz::where('cat_id', 6 )->get();
        $cat_id_7 = PostKz::where('cat_id', 7 )->get();
          
            $posts = PostKz::find($id);
           
            return  view('kz.post', [
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
}
