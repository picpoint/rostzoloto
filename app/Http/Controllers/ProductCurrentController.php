<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCurrentController extends Controller
{

    public function index(Request $request) {
        dd($request->product);
        return view('users.productcurrent');
    }

}
