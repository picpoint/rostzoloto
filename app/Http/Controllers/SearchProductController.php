<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Material;
use App\Models\Product;
use App\Models\Stone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchProductController extends Controller
{

    public function search(Request $request) {

        $categories = Category::all();          // получаем все категории
        $materials = Material::all();           // получаем все материаллы
        $stones = Stone::all();         // получаем все вставки
        $products = '';

        $resSearch = DB::table('products')->where('vendor_code', 'LIKE', "%{$request->s}%")->get();         // получаем из БД изделия у которых артикул частично совпадает с введёнными данными из поля поиск


        if (count($resSearch) == 0) {
            $resSearch = '';
        }
        

        return view('users.catalog', compact('resSearch', 'categories', 'materials', 'stones', 'products'));


    }

}
