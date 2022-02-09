<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/assets/users/css/style.css">
    <link rel="stylesheet" href="/public/assets/users/css/all.min.css">
    <title>Альбом</title>
</head>
<body>

<section class="album">
    <div class="album__headeralb">
        @include('layouts.header')
    </div>
    <div class="album__contentalb">
        <div class="album__contentalbwrp">

            @foreach($arrPicts as $key => $value)
                <div class="album__albumalb">
                    <a href="#">
                        <img src="/public/assets/users/{{ $value }}" alt="detail">
                    </a>
                </div>
            @endforeach



        </div>
    </div>
    <div class="album__footeralb">
        @include('layouts.footer')
    </div>
</section>

</body>
</html>