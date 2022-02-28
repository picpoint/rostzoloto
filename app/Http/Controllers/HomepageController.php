<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{

    public function index() {
        $title = 'Ювелирная компания РОСТЗОЛОТО - купить ювелирные украшения (Сочи, Краснодар)';
        $products = DB::table('products')->orderBy('id', 'desc')->paginate(8);          // получаем 8 записей из БД отсортированных в обратном порядке
        $blogPosts = DB::table('blogs')->orderBy('id', 'desc')->paginate(3);
        $partners = DB::table('partners')->orderBy('id', 'desc')->paginate(6);
        return view('index', compact('title', 'products', 'blogPosts', 'partners'));
    }

}