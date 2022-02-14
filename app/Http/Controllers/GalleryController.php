<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{

    public function index() {

        $arrTitles = [];            // пустой массив для заголовков
        $allDatas = Gallery::all();       // все данные из таблицы galleries

        if (count($allDatas) != 0) {            // если из БД пришёл не пустой массив
            foreach ($allDatas as $data) {        // перебираем весь массив данных
                $arrTitles[] = $data->title;            // создаём массив заголовков
            }

            $arrNames = array_unique($arrTitles);           // из всего массива заголовков оставляем только уникальные
            $picts = [];            // создаём пустой массив для картинок

            foreach ($arrNames as $key => $value) {         // перебираем массив уникальных заголовков
                $picts[] = DB::table('galleries')->where('title', '=', $value)->value('preview');           // в массив для картинок помещаем картинку из preview
                $slugs[] = DB::table('galleries')->where('title', '=', $value)->value('slug');          // в массив для слагов помещаем слаг
            }

            $res = array_combine($slugs, $picts);           // делаем ассоциативный массив где ключ=>slug  а value=>имя картинки
        } else {
            $res = '';
        }


        return view('users.gallery', compact('res'));
    }


    public function showAlbum($slug) {          // метод показа конкретного альбома
        $allDatas = Gallery::all();         // получаем все записи
        $arrPicts = [];

        foreach ($allDatas as $data) {          // перебираем все записи
            if (mb_substr($data->slug, 0, strlen($slug)) == $slug) {            // если slug-подстрока с 0 позиции  == длинне строки слага(т.е. если строка слаг из БД == строке слаг из URL)
                $arrPicts[] = $data->detail;            // в массив записываем все детальные картинки
            }
        }

        return view('users.album', compact('arrPicts'));
    }


}
