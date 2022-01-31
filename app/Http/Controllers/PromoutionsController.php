<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoutionsController extends Controller
{

    public function index() {
        return view('users.promoutions');
    }

}
