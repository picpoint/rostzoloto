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
        $allDatas = Gallery::all()->pluck('title');

        foreach ($allDatas as $dts) {
            $datas[] = $dts;
        }

        $uniqueValues = array_unique($datas);

        foreach ($uniqueValues as $key => $value) {
            $res[] = DB::table('galleries')->where('title', '=', $value)->first();
        }

        if (empty($res)) {
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
        $nameAlbum = Str::slug($request->title, '-');

        foreach ($request->detail as $detail) {

            Gallery::create([
                'title' => $request->title,
                'preview' => $request->preview->storeAs("img/gallery/$nameAlbum", $request->preview->getClientOriginalName()),
                'detail' => $detail->storeAs("img/gallery/$nameAlbum", $detail->getClientOriginalName()),
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

        $nameFolder = DB::table('galleries')->where('title', '=', $title)->pluck('slug')->first();
//        dd($nameFolder);
//        DB::table('galleries')->where('title', '=', $title)->delete();

        $dir="public/assets/users/img/gallery/natasha-libelle";
//        dd($dir);
        array_map('unlink', glob("$dir/*.*"));
        rmdir($dir);

//        rmdir("public/assets/users/img/gallery/$nameFolder");
        session()->flash('success', 'Галерея удалена');

        return redirect()->route('gallery.index');

    }
}
