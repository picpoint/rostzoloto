<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [];
        $allDatas = Gallery::all()->pluck('title');         // получаем все заголовки из таблицы galleries

        foreach ($allDatas as $dts) {           // перебираем заголовки
            $datas[] = $dts;            // помещаем их в массив
        }

        $uniqueValues = array_unique($datas);           // делаем из всех заголовков, массив уникальных

        foreach ($uniqueValues as $key => $value) {         // перебираем массив уникальных заголовков
            $res[] = DB::table('galleries')->where('title', '=', $value)->first();          // берём из таблицы первую запись, у которой заголовок == уникальному заголовку, для показа в админке
        }

        if (empty($res)) {          // если такого нет, присваиваем переменной пустую строку
            $res = '';
        }


        return view('admin.gallery.index', compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nameAlbum = Str::slug($request->title, '-');           // формируем slug из title для создания папки

        foreach ($request->detail as $detail) {     // перебираем массив детальных картинок который пришёл из формы

            Gallery::create([
                'title' => $request->title,
                'preview' => $request->preview->storeAs("img/gallery/$nameAlbum", $request->preview->getClientOriginalName()),          // сохраняем превью картинки в папку $nameAlbum с оригинальным именем
                'detail' => $detail->storeAs("img/gallery/$nameAlbum", $detail->getClientOriginalName()),           // сохраняем детальные картинки в папку $nameAlbum с оригинальными именами
            ]);

        }

        session()->flash('success', 'Картинки загружены в альбом');

        return redirect()->route('gallery.create');


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($title)
    {

        $nameFolder = DB::table('galleries')->where('title', '=', $title)->pluck('slug')->first();          // выбираем первую запись из бд где title == пришедшему slug-у из URL

        DB::table('galleries')->where('title', '=', $title)->delete();          // удаляем из таблицы записи, где заголовки == пришедшему slug-у из URL-a

        $dir="C:/OpenServer/domains/rostzoloto/public/assets/users/img/gallery/$nameFolder";            // получем путь к папке в которой лежат картинки конкретного альбома

        array_map('unlink', glob("$dir/*.*"));          // удаляем все файлы из данной папки
        rmdir($dir);            // удаляем саму папку

        session()->flash('success', 'Галерея удалена');

        return redirect()->route('gallery.index');

    }
}
