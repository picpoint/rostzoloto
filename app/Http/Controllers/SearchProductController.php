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

        $categories = Category::all();
        $materials = Material::all();
        $stones = Stone::all();
        $products = '';

        $resSearch = Product::where('vendor_code', 'LIKE', "%{$request->s}%")->get();
//        $resSearch = DB::table('products')->where('vendor_code', 'LIKE', "%{$request->s}%")->paginate(40);

        if (count($resSearch) == 0) {
            $resSearch = '';
        }
        

        return view('users.catalog', compact('resSearch', 'categories', 'materials', 'stones', 'products'));


    }

}
