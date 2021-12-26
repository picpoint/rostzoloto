<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function store(Request $request) {

        $rules = [
            'firstname' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users'
        ];


        $messages = [
            'firstname.required' => 'Поле "Имя" обязательное',
            'password.required' => 'Поле "Пароль" обязательное',
            'password.confirmed' => 'Поле "Подтверждение пароля" обязательное',
            'email.required' => 'Поле "Почта" обязательное',
            'email.email' => 'Адрес почты должен содержать символ "@"',
            'email.unique' => 'Пользователь с таким адресом уже зарегистрирован'
        ];


        $validator = Validator::make($request->all(), $rules, $messages)->validate();


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

        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $messages = [
            'email.required' => 'Поле "Почта" обязательное',
            'email.email' => 'Адрес почты должен содержать символ "@"',
            'password' => 'Поле "Пароль" обязательное'
        ];

        Validator::make($request->all(), $rules, $messages);


        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            if (Auth::user()->is_admin) {
                return redirect()->route('rmtar');
            } elseif (Auth::user()) {
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