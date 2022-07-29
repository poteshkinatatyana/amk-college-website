<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryKz;
use App\Models\PostKz;
use Illuminate\Http\Request;

class PostKzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = PostKz::orderBy('created_at', 'DESC')->get();

        return view('admin.postkz.index', [
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
        $categories = CategoryKz::orderBy('created_at', 'DESC')->get();

        return view('admin.postkz.create', [
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
        $post = new PostKz();
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
     * @param  \App\Models\PostKZ  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostKZ  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(PostKz $post)
    {
        $categories = CategoryKz::orderBy('created_at', 'DESC')->get();

        return view('admin.postkz.edit', [
            'categories' => $categories,
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostKZ  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostKZ $post)
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
     * @param  \App\Models\PostKZ  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostKz $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Страница была успешно удалена!');
    }
}
