<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductCurrentController extends Controller
{

    public function index(Request $request) {
        $idProduct = $request->product;         // получаем данные из запроса
        $currentProduct = Product::find($idProduct);            // получаем данные о текущем изделии

        return view('users.productcurrent', compact('currentProduct'));
    }

}
