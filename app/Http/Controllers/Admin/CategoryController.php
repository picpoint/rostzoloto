<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();          // получаем все категории и передаём на страницу
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = $request->title;            // получаем пришедший title
        Category::create([
            'title' => $request->title,         // создаём в БД из title определённую категорию
        ]);

        session()->flash('success', "Категория \"$request->title\" создана");

        return redirect()->route('categories.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);            // находим в БД определённую категорию по пришедшему id
        return view('admin.categories.edit', compact('category'));          // передаём на страницу для редактирования
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
        $category = Category::find($id);            // находим конкретную категорию по пришедшему id
        $category->slug = null;         // обнуляем слаг данной категории
        $category->update($request->all());         // обновляем все поля данной категории

        session()->flash('success', 'Категория обновлена');

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);         // удаляем категорию из БД по конкретному id
        session('success', 'Категория удалена');
        return redirect()->route('categories.index');
    }
}
