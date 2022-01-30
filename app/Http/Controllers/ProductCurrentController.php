<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductCurrentController extends Controller
{

    public function index(Request $request) {
        $idProduct = $request->product;
        $currentProduct = Product::find($idProduct);

        return view('users.productcurrent', compact('currentProduct'));
    }

}
