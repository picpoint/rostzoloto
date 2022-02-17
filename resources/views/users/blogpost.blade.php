<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пост</title>
    <link rel="stylesheet" href="/public/assets/users/css/style.css">
    <link rel="stylesheet" href="/public/assets/users/css/all.min.css">
</head>
<body>

<section class="blogpost">
    <div class="blogpost__headerblog">
        @include('layouts.header')
    </div>

    <div class="blogpost__contentblog">
        <span>текущий пост блога</span>
    </div>

    <div class="blogpost__footerblog">
        @include('layouts.footer')
    </div>

</section>

</body>
</html>