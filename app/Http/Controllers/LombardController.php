<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LombardController extends Controller
{

    public function index() {
        return view('users.lombards');
    }

}
