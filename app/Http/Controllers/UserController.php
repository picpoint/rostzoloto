<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function store(Request $request) {
        $request->validate([
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users'
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'password' => bcrypt($request->password),
            'email' => $request->email
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }


    public function logout() {
        Auth::logout();

        return redirect()->route('home');
    }


}
