<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchProductController extends Controller
{

    public function search(Request $request) {

        dd(Product::where('vendor_code', 'LIKE', "%{$request->input}%")->get());

    }

}
