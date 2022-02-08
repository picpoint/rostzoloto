<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <link rel="stylesheet" href="public/assets/users/css/all.min.css">
    <title>Галерея</title>
</head>
<body>

<section class="gallery">
    <div class="gallery__headerglr">
        @include('layouts.header')
    </div>
    <div class="gallery__contentglr">
        <div class="gallery__contentglrwrp">


            {{--@foreach($albums as $album)--}}

                {{--<div class="gallery__albumglr">--}}
                    {{--<a href="#">--}}

                    {{--</a>--}}
                {{--</div>--}}

            {{--@endforeach--}}

            {{--<div class="gallery__albumglr">--}}
            {{--<a href="#">--}}

            {{--</a>--}}
            {{--</div>--}}


        </div>
    </div>
    <div class="gallery__footerglr">
        @include('layouts.footer')
    </div>
</section>

</body>
</html>