<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostEn;
use App\Models\CategoryEn;

class PageEnController extends Controller
{
    public function show($id)
    {
        $categories = CategoryEn::orderBy('created_at', 'desc')->get();

        $cat_id_1 = PostEn::where('cat_id', 1 )->get();
        $cat_id_2 = PostEn::where('cat_id', 2 )->get();
        $cat_id_3 = PostEn::where('cat_id', 3 )->get();
        $cat_id_4 = PostEn::where('cat_id', 4 )->get();
        $cat_id_5 = PostEn::where('cat_id', 5 )->get();
        $cat_id_6 = PostEn::where('cat_id', 6 )->get();
        $cat_id_7 = PostEn::where('cat_id', 7 )->get();
          
            $posts = PostEn::find($id);
           
            return  view('en.post', [
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
