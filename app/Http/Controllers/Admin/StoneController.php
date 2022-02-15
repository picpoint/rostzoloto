<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stone;
use Illuminate\Http\Request;

class StoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stones = Stone::all();         // получаем все вставки
        return view('admin.stones.index', compact('stones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Stone::create($request->all());         // сохраняем инфармацию в БД по пришедшим полям
        session()->flash('success', "Вставка \"$request->title\" сохранена");

        return redirect()->route('stones.create');
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
        $stone = Stone::find($id);          // находим конкретную вставку по id
        return view('admin.stones.edit', compact('stone'));
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
        $stone = Stone::find($id);          // находим конкретную вставку по id
        $stone->slug = null;            // обнуляем ей слаг
        $stone->update($request->all());            // обновляем все поля в БД по конкретной вставке
        session()->flash('success', "Вставка \"$stone->title\" отредактированна");

        return redirect()->route('stones.edit', compact('stone'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stone = Stone::find($id);          // находим конкретную вставку по id
        Stone::destroy($id);            // удаляем запись по конкретной вставке
        session()->flash('success', "Вставка \"$stone->title\"  удалена");
        return redirect()->route('stones.index');
    }
}
