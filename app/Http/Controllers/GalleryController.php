<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{

    public function index() {

        $arrTitles = [];
        $allDatas = Gallery::all();

        foreach ($allDatas as $data) {
            $arrTitles[] = $data->title;
        }



//        $arrNames = array_unique($arrTitles);
//
//        dd($arrNames);
//
//        $arrAllPictures = DB::table('galleries')->where()


        $arrNames = array_unique($arrTitles);
        $picts = [];

//        dd($arrNames);

        foreach ($arrNames as $key => $value) {
            $picts[] = DB::table('galleries')->where('title', '=', $value)->value('preview');
            $ids[] = DB::table('galleries')->where('title', '=', $value)->pluck( 'preview', 'id');
        }


        dump($ids);
        dd($picts);


        return view('users.gallery', compact('picts'));
    }


    public function showAlbum() {
        return view();
    }


}
