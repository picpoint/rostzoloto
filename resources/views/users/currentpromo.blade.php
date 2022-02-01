<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Текущая акция</title>
    <link rel="stylesheet" href="/public/assets/users/css/style.css">
    <link rel="stylesheet" href="/public/assets/users/css/all.min.css">
</head>
<body>

<section class="currrentpromo">
    <div class="currrentpromo__headercurpromo">
        @include('layouts.header')
    </div>

    <div class="currrentpromo__contentcurpromo">
        <div class="currrentpromo__contentcurpromowrp">
            <div class="currrentpromo__contentcurpromopict">
                <img src="/public/assets/users/{{$currentPromo[0]->picture}}" alt="promo">
            </div>
            <div class="currrentpromo__contentcurpromodesc">
                <span>{{ $currentPromo[0]->title }}</span>
                <span>{{ $currentPromo[0]->content }}</span>
            </div>
        </div>
    </div>

    <div class="currrentpromo__footercurpromo">
        @include('layouts.footer')
    </div>

</section>

</body>
</html>