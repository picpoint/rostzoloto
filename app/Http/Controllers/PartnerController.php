<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{

    public function index() {
        return view('users.partner');
    }

}
