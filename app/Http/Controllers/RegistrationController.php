<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{

    public function index() {
        $title = "Регистрация | Ростзолото";
        return view('users.registered', compact('title'));
    }




}
