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

<section class="registered">

    <div class="registered__headerpers">
        @include('layouts.header')
    </div>

    <div class="registered__reglogpers">
        <div class="registered__reglogwrapper">

            <div class="registered__login">
                <div class="registered__loginhdr">
                    <span>Личный кабинет</span>
                </div>
                <div class="registered__loginblock">

                    <div class="registered__infomsg">

                        @if($errors->any())
                            <div class="reg__alert">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>

                    <form action="{{ route('registered.store') }}" method="post" class="registered__loginform">
                        @csrf
                        <input type="text" name="firstname" placeholder="*Имя" value="{{ old('firstname') }}">
                        <input type="text" name="lastname" placeholder="Фамилия" value="{{ old('lastname') }}">
                        <input type="password" name="password" placeholder="*Пароль">
                        <input type="password" name="password_confirmation" placeholder="*Подтверждение пароля">
                        <input type="email" name="email" placeholder="*Почта" value="{{ old('email') }}">
                        <button type="submit">Зарегистрироваться</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <div class="registered__footerpers">
        @include('layouts.footer')
    </div>


</section>

</body>
</html>