<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryKz;
use Illuminate\Http\Request;

class CategoryKzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryKz::orderBy('created_at', 'desc')->get();

        return view('admin.categorykz.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorykz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_category = new CategoryKz();
        $new_category->title = $request->title;
        $new_category->save();

        return redirect()->back()->withSuccess('Вкладка была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryKz  $category
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryKz $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryKz  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryKz $category)
    {
        return view('admin.categorykz.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryKz  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryKz $category)
    {
        $category->title = $request->title;
        $category->save();

        return redirect()->back()->withSuccess('Вкладка была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryKz  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryKz $category)
    {
        $category->delete();
        return redirect()->back()->withSuccess('Вкладка была успешно удалена!');
    }
}
