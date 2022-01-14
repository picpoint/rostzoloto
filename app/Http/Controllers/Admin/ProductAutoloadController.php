<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductAutoloadController extends Controller
{

    public function create() {
        return view('admin.products.autoload');
    }

    public function autoloadFiles(Request $request) {
        dd($request->all());
    }

}
