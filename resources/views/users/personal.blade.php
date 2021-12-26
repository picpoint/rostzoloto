<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <link rel="stylesheet" href="public/assets/users/css/all.min.css">
</head>
<body>

    <section class="personal">

        <div class="personal__headerpers">
            @include('layouts.header')
        </div>

        <div class="personal__reglogpers">
            <div class="personal__reglogwrapper">
                <div class="personal__login">
                    <div class="personal__loginhdr">
                        <span>Авторизация</span>
                    </div>
                    <div class="personal__loginblock">
                        <div class="personal__authinfo">
                            @include('layouts.errors')
                        </div>
                        <form action="{{ route('authorization') }}" method="post" class="personal__loginform">
                            @csrf
                            <input type="email" name="email" placeholder="Почта">
                            <input type="password" name="password" placeholder="Пароль">
                            <button type="submit">Войти</button>
                        </form>
                    </div>
                </div>
                <div class="personal__registration">
                    <div class="personal__loginhdr">
                        <span>Регистрация</span>
                    </div>
                    <div class="personal__loginblock">
                        <form action="{{ route('registered') }}" method="get" class="personal__regform">
                            <span>Впервые у нас ?</span>
                            <span>Кликай, переходи и регистрируйся</span>
                            <button type="submit">Регистрация</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="personal__footerpers">
            @include('layouts.footer')
        </div>


    </section>

</body>
</html>