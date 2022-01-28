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

        $categories = Category::all();
        $materials = Material::all();
        $stones = Stone::all();
        $products = '';
        $resSearch = '';


        $categoriesArr = [];
        $materialsArr = [];
        $stonesArr = [];
        
        $rawDatas = $request->all();

        foreach ($rawDatas as $key => $value) {
            if ($key[0] == "_") {
                continue;
            } elseif ($key[0] == "c") {
                $categoriesArr[] = $value;
            } elseif ($key[0] == "m") {
                $materialsArr[] = $value;
            } elseif ($key[0] == "s") {
                $stonesArr[] = $value;
            }
        }



        if(count($categoriesArr) == 0) {
            foreach ($categories as $cat) {
                $categoriesArr[] = $cat->id;
            }
        }


        if (count($materialsArr) == 0) {
            foreach ($materials as $mat) {
                $materialsArr[] = $mat->id;
            }
        }


        if (count($stonesArr) == 0) {
            foreach ($stones as $st) {
                $stonesArr[] = $st->id;
            }
        }



        $filters = DB::table('products')
            ->whereIn('category_id', $categoriesArr)
            ->whereIn('material_id', $materialsArr)
            ->whereIn('stone_id', $stonesArr)->get();


        if (count($filters) == 0) {
            $filters = '';
        }


        return view('users.catalog', compact('filters', 'categories', 'materials', 'stones', 'products', 'resSearch'));

    }

}
