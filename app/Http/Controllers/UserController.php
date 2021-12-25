<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function store(Request $request) {
        $request->validate([
            'firstname' => 'required',
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



    public function login(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            if (Auth::user()) {
                return redirect()->route('home');
            }
        }

        return redirect()->back()->with('error', 'Логин или пароль неверны ...');

    }



    public function logout() {
        Auth::logout();

        return redirect()->route('home');
    }


}