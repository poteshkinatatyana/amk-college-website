<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryEn;
use App\Models\PostEn;
use Illuminate\Http\Request;

class PostEnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = PostEn::orderBy('created_at', 'DESC')->get();

        return view('admin.posten.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryEn::orderBy('created_at', 'DESC')->get();

        return view('admin.posten.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new PostEn();
        $post->title = $request->title;
        $post->img = $request->img;
        $post->text = $request->text;
        $post->htmlcode = $request->htmlcode;
        $post->cat_id = $request->cat_id;
        $post->save();

        return redirect()->back()->withSuccess('Страница была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostEn  $post
     * @return \Illuminate\Http\Response
     */
    public function show(PostEn $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostEn  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(PostEn $post)
    {
        $categories = CategoryEn::orderBy('created_at', 'DESC')->get();

        return view('admin.posten.edit', [
            'categories' => $categories,
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostEn  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostEn $post)
    {
        $post->title = $request->title;
        $post->img = $request->img;
        $post->text = $request->text;
        $post->htmlcode = $request->htmlcode;
        $post->cat_id = $request->cat_id;
        $post->save();

        return redirect()->back()->withSuccess('Страница была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostEn  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostEn $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Страница была успешно удалена!');
    }
}
