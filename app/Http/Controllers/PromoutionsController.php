<?php

namespace App\Http\Controllers;

use App\Models\Promoution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromoutionsController extends Controller
{

    public function index() {
        $allPromo = Promoution::all();          // получаем из БД все акции
        return view('users.promoutions', compact('allPromo'));
    }


    public function currentPromo(Request $request, $slug) {

        $currentPromo = DB::table('promoutions')->where('slug', '=', $slug)->get();         // получаем из БД акцию, у которой слаг == текущему полученному слагу

        return view('users.currentpromo', compact('currentPromo'));
    }


}
