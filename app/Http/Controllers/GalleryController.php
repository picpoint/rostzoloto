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


        $arrNames = array_unique($arrTitles);
        $picts = [];


        foreach ($arrNames as $key => $value) {
            $picts[] = DB::table('galleries')->where('title', '=', $value)->value('preview');
            $slugs[] = DB::table('galleries')->where('title', '=', $value)->value('slug');
        }

        $res = array_combine($slugs, $picts);


        return view('users.gallery', compact('res'));
    }


    public function showAlbum() {
        return view();
    }


}
