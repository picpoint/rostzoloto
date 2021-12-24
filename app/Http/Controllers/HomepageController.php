<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function index() {
        $title = 'Ювелирная компания РОСТЗОЛОТО - купить ювелирные украшения (Сочи, Краснодар)';
        return view('index', compact('title'));
    }

}