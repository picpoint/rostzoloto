<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCurrentController extends Controller
{

    public function index() {
        return view('users.productcurrent');
    }

}
