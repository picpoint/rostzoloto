<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{

    public function index() {
        $title = "Личный кабинет | Ростзолото";
        return view('users.personal', compact('title'));
    }




}