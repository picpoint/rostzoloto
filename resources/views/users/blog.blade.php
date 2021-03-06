<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <link rel="stylesheet" href="public/assets/users/css/all.min.css">
    <title>Блог</title>
</head>
<body>

<section class="blog">
    <div class="blog__headerblg">
        @include('layouts.header')
    </div>
    <div class="blog__contentblg">
        <div class="blog__contentblgwrp">

            @foreach($posts as $post)
                <div class="blog__postblg">
                    <a href="{{ route('blogpost', ['slug' => $post->slug]) }}">
                        <div class="blog__postblgimg">
                            <img src="public/assets/users/{{ $post->preview }}" alt="img">
                        </div>
                        <div class="blog__postblgcontent">
                            <span>{{ $post->title }}</span>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
    <div class="blog__footerblg">
        @include('layouts.footer')
    </div>
</section>

</body>
</html>