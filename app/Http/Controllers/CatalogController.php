<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Material;
use App\Models\Stone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{

    public function index() {
        $categories = Category::all();          // получаем все категории
        $materials = Material::all();           // получаем все материаллы
        $stones = Stone::all();         // получаем все вставки
        $products = DB::table('products')->orderBy('id', 'desc')->paginate(40);         // получаем все изделия из БД сортируя их по id в обратном порядке(чтобы самые последние показывались в каталоге первыми)
        $resSearch = '';

        return view('users.catalog', compact('categories', 'materials', 'stones', 'products', 'resSearch'));
    }


}
