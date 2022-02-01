<?php

namespace App\Http\Controllers;

use App\Models\Promoution;
use Illuminate\Http\Request;

class PromoutionsController extends Controller
{

    public function index() {
        $allPromo = Promoution::all();

        return view('users.promoutions', compact('allPromo'));
    }


    public function currentPromo() {
        return view('users.currentpromo');
    }


}
