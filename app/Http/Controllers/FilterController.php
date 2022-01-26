<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{

    public function showFilter(Request $request) {
        $categoriesArr = [];
        $materialsArr = [];
        $stonesArr = [];
        
        dd($request->all());
    }

}
