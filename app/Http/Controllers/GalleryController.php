<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index() {

        $arrTitles = [];

        $albums = Gallery::all();

        foreach ($albums as $album) {
            $arrTitles[] = $album->title;
        }


        dump($arrTitles);
        dd(array_unique($arrTitles));



        return view('users.gallery', compact('albums'));
    }

}
