<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostKz;
use App\Models\PostEn;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts_count = Post::all()->count();
        $posts_kz_count = PostKz::all()->count();
        $posts_en_count = PostEn::all()->count();

        return view('admin.home.index', [
            'posts_count' => $posts_count,
            'posts_kz_count' => $posts_kz_count,
            'posts_en_count' => $posts_en_count,
            
        ]);
    }
}
