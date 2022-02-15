<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function store(Request $request) {

        $rules = [          // определяем правила для полей валидации
            'firstname' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users'
        ];


        $messages = [           // каждому правилу прописываем сообщение
            'firstname.required' => 'Поле "Имя" обязательное',
            'password.required' => 'Поле "Пароль" обязательное',
            'password.confirmed' => 'Поле "Подтверждение пароля" обязательное',
            'email.required' => 'Поле "Почта" обязательное',
            'email.email' => 'Адрес почты должен содержать символ "@"',
            'email.unique' => 'Пользователь с таким адресом уже зарегистрирован'
        ];


        $validator = Validator::make($request->all(), $rules, $messages)->validate();           // производим валидацию


        $user = User::create([          // записываем данные юзера в БД при регистрации
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'password' => bcrypt($request->password),
            'email' => $request->email
        ]);

        Auth::login($user);         // сразу после регистрации автоматически его авторизовываем

        return redirect()->route('home');
    }



    public function login(Request $request) {

        $rules = [          // правила валидации для входа
            'email' => 'required|email',
            'password' => 'required'
        ];

        $messages = [           // прописываем сообщения для полей
            'email.required' => 'Поле "Почта" обязательное',
            'email.email' => 'Адрес почты должен содержать символ "@"',
            'password' => 'Поле "Пароль" обязательное'
        ];

        Validator::make($request->all(), $rules, $messages);            // валидируем


        if (Auth::attempt([         // если валидация успешна и поля заполнены, авторизуем
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            if (Auth::user()->is_admin) {           // если при авторизации пользователь админ, перебрасываем его в админку
                return redirect()->route('admin');
            } elseif (Auth::user()) {           // иначе просто на страницу
                return redirect()->route('home');
            }
        }

        return redirect()->back()->with('error', 'Логин или пароль неверны ...');

    }



    public function logout() {          // ф-ия разлогирования
        Auth::logout();

        return redirect()->route('home');
    }


}