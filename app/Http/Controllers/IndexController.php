<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use App\Models\CategoryKz;
use App\Models\PostKz;
use App\Models\CategoryEn;
use App\Models\PostEn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        $cat_id_1 = Post::where('cat_id', 1 )->get();
        $cat_id_2 = Post::where('cat_id', 2 )->get();
        $cat_id_3 = Post::where('cat_id', 3 )->get();
        $cat_id_4 = Post::where('cat_id', 4 )->get();
        $cat_id_5 = Post::where('cat_id', 5 )->get();
        $cat_id_6 = Post::where('cat_id', 6 )->get();
        $cat_id_7 = Post::where('cat_id', 7 )->get();


        return view('welcome', [
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
    public function kz()
    {
        $categories = CategoryKz::orderBy('created_at', 'desc')->get();

        $cat_id_1 = PostKz::where('cat_id', 1 )->get();
        $cat_id_2 = PostKz::where('cat_id', 2 )->get();
        $cat_id_3 = PostKz::where('cat_id', 3 )->get();
        $cat_id_4 = PostKz::where('cat_id', 4 )->get();
        $cat_id_5 = PostKz::where('cat_id', 5 )->get();
        $cat_id_6 = PostKz::where('cat_id', 6 )->get();
        $cat_id_7 = PostKz::where('cat_id', 7 )->get();


        return view('welcome-kz', [
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
    public function en()
    {
        $categories = CategoryEn::orderBy('created_at', 'desc')->get();

        $cat_id_1 = PostEn::where('cat_id', 1 )->get();
        $cat_id_2 = PostEn::where('cat_id', 2 )->get();
        $cat_id_3 = PostEn::where('cat_id', 3 )->get();
        $cat_id_4 = PostEn::where('cat_id', 4 )->get();
        $cat_id_5 = PostEn::where('cat_id', 5 )->get();
        $cat_id_6 = PostEn::where('cat_id', 6 )->get();
        $cat_id_7 = PostEn::where('cat_id', 7 )->get();


        return view('welcome-en', [
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
