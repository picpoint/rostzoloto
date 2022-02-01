<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Акции</title>
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <link rel="stylesheet" href="public/assets/users/css/all.min.css">
</head>
<body>

<section class="promo">
    <div class="promo__headerpromo">
        @include('layouts.header')
    </div>

    <div class="promo__contentpromo">
        <div class="promo__contentpromowrapper">

            @if(count($allPromo) != 0)

            @foreach($allPromo as $promo)

                <div class="promo__currentpromo">
                    <div class="promo__currentpromopict">
                        <a href="{{ route("{slug}", ['slug' => $promo->slug]) }}">
                            <img src="public/assets/users/{{ $promo->picture }}" alt="promo">
                        </a>
                    </div>
                    <div class="promo__currentpromodesc">
                        <span>{{ $promo->title }}</span>
                    </div>
                </div>

            @endforeach
                @else
                <span class="promo__currentpromoempty">Пока нет ни одной действующей акции... :-(</span>
            @endif


        </div>
    </div>

    <div class="promo__footerpromo">
        @include('layouts.footer')
    </div>

</section>

</body>
</html>