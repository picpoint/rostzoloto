<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Material;
use App\Models\Product;
use App\Models\Stone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{

    public function showFilter(Request $request) {

        $categories = Category::all();          // получаем все категории
        $materials = Material::all();           // получаем все материалы
        $stones = Stone::all();         // получаем все вставки
        $products = '';
        $resSearch = '';


        $categoriesArr = [];
        $materialsArr = [];
        $stonesArr = [];
        
        $rawDatas = $request->all();            // получаем массив данных из запроса

        foreach ($rawDatas as $key => $value) {         // перебираем массив
            if ($key[0] == "_") {           // если ключ начинается с _ то пропускаем его(т.к. это токен)
                continue;
            } elseif ($key[0] == "c") {         // если ключ начинается с "с", значение ложим в массив категорий
                $categoriesArr[] = $value;
            } elseif ($key[0] == "m") {         // если ключ начинается с "m", значение ложим в массив материалов
                $materialsArr[] = $value;
            } elseif ($key[0] == "s") {         // если ключ начинается с "s", значение ложим в массив вставок
                $stonesArr[] = $value;
            }
        }



        if(count($categoriesArr) == 0) {            // если массив пуст, перебираем все категории и все id помещаем в массив
            foreach ($categories as $cat) {
                $categoriesArr[] = $cat->id;
            }
        }


        if (count($materialsArr) == 0) {            // если массив пуст, перебираем все материаллы и все id помещаем в массив
            foreach ($materials as $mat) {
                $materialsArr[] = $mat->id;
            }
        }


        if (count($stonesArr) == 0) {           // если массив пуст, перебираем все вставки и все id помещаем в массив
            foreach ($stones as $st) {
                $stonesArr[] = $st->id;
            }
        }



        $filters = DB::table('products')            // получаем все записи изделий из БД на основе 3-х масивов
            ->whereIn('category_id', $categoriesArr)
            ->whereIn('material_id', $materialsArr)
            ->whereIn('stone_id', $stonesArr)->get();


        if (count($filters) == 0) {
            $filters = '';
        }


        return view('users.catalog', compact('filters', 'categories', 'materials', 'stones', 'products', 'resSearch'));

    }

}
