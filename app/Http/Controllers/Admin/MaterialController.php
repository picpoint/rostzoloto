<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();           // получаем все записи материаллов из БД
        return view('admin.materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.materials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material = $request->title;            // получаем название материалла из поля формы
        Material::create([
            'title' => $request->title          // записываем в БД название материалла
        ]);

        session()->flash('success', "Материал \"$request->title\" успешно создан");

        return redirect()->route('materials.create');
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
        $material = Material::find($id);            // ищем конкретную запись в БД по id
        return view('admin.materials.edit', compact('material'));           // передаём её на страницу
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
        $material = Material::find($id);            // получаем из БД конкретный материал по id
        $material->slug = null;         // обнуляем ему slug
        $material->update($request->all());         // обновляем все поля по данной записи
        session()->flash('success', 'Материал обновлён');

        return view('admin.materials.edit', compact('material'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Material::destroy($id);         // удаляем запись о материалле из БД по конкретному id
        session()->flash('success', 'Материал удалён');

        return redirect()->route('materials.index');
    }
}
