<?php

namespace App\Http\Controllers;

use App\Models\Promoution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromoutionsController extends Controller
{

    public function index() {
        $allPromo = Promoution::all();

        return view('users.promoutions', compact('allPromo'));
    }


    public function currentPromo(Request $request, $slug) {
//        dump($slug);
//        dd($request->all());

        $currentPromo = DB::table('promoutions')->where('slug', '=', $slug)->get();
//        dd($currentPromo);

        return view('users.currentpromo', compact('currentPromo'));
    }


}
