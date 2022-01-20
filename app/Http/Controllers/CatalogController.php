<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Material;
use App\Models\Stone;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index() {
        $categories = Category::all();
        $materials = Material::all();
        $stones = Stone::all();

        return view('users.catalog', compact('categories', 'materials', 'stones'));
    }

}
