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
        $categories = Category::all();
        $materials = Material::all();
        $stones = Stone::all();
        $products = DB::table('products')->orderBy('id', 'desc')->paginate(40);
        $resSearch = '';

        return view('users.catalog', compact('categories', 'materials', 'stones', 'products', 'resSearch'));
    }


}
