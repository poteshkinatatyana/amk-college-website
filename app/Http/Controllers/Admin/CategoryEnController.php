<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryEn;
use Illuminate\Http\Request;

class CategoryEnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryEn::orderBy('created_at', 'desc')->get();

        return view('admin.categoryen.index', [
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
        return view('admin.categoryen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_category = new CategoryEn();
        $new_category->title = $request->title;
        $new_category->save();

        return redirect()->back()->withSuccess('Вкладка была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryEn  $category
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryEn $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryEn  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryEn $category)
    {
        return view('admin.categoryen.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryEn $category)
    {
        $category->title = $request->title;
        $category->save();

        return redirect()->back()->withSuccess('Вкладка была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryEn  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryEn $category)
    {
        $category->delete();
        return redirect()->back()->withSuccess('Вкладка была успешно удалена!');
    }
}
