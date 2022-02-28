<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <link rel="stylesheet" href="public/assets/users/css/all.min.css">
    <title>{{ $title }}</title>
</head>
<body>

<section class="homepage">

    @include('layouts.header')

    <div class="homepage__slider">
    </div>

    <div class="homepage__info">
        <div class="homepage__infowrapper">
            <div class="homepage__delivery">
                <div class="homepage__infologo">
                    <div class="homepage__infobackground">
                        <i class="fas fa-truck"></i>
                    </div>
                </div>
                <div class="homepage__infotext">
                    <span>Бесплатная доставка</span>
                    <span>при заказе свыше 3000р</span>
                </div>
            </div>
            <div class="homepage__gift">
                <div class="homepage__infologo">
                    <div class="homepage__infobackground">
                        <i class="fas fa-gift"></i>
                    </div>
                </div>
                <div class="homepage__infotext">
                    <span>Получите подарок</span>
                    <span>прямо сейчас</span>
                </div>
            </div>
            <div class="homepage__back">
                <div class="homepage__infologo">
                    <div class="homepage__infobackground">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                </div>
                <div class="homepage__infotext">
                    <span>Возврат средст</span>
                    <span>до 14 дней</span>
                </div>
            </div>
            <div class="homepage__support">
                <div class="homepage__infologo">
                    <div class="homepage__infobackground">
                        <i class="fas fa-headset"></i>
                    </div>
                </div>
                <div class="homepage__infotext">
                    <span>Онлайн консультант</span>
                    <span>с 8 до 20:00</span>
                </div>
            </div>
        </div>
    </div>

    <div class="homepage__newitems">
        <div class="homepage__newitemtitle">
            <span>НОВИНКИ</span>
        </div>
        <div class="homepage__items">
            <div class="homepage__itemswrapper">

                @if($products != '')

                    @foreach($products as $product)
                        <div class="homepage__cardproduct">
                            <form action="{{ route('filter', ['id' => $product->id]) }}" method="post"
                                  class="homepage__cardproductform">
                                @csrf
                                <div class="homepage__pict">
                                    <div class="homepage__addfuncs">
                                        <a href="eye.php"><i class="far fa-eye"></i></a>
                                        <a href="heart.php"><i class="fas fa-heart"></i></a>
                                    </div>
                                    <a href="{{ route('product', ['product' => $product->id]) }}">
                                        <img src="public/assets/users/{{ $product->picture }}"
                                             alt="jewelry">
                                    </a>
                                </div>
                                <div class="homepage__productinfo">
                                    <span>{{ $product->title }}</span>
                                    <span>{{ $product->price }} р.</span>
                                    <button type="submit">в корзину</button>
                                </div>
                            </form>
                        </div>
                    @endforeach

                @endif

            </div>
        </div>
    </div>


    <div class="homepage__category">
        <div class="homepage__categorywrapper">

            <div class="homepage__leftblock">
                <div class="homepage__lefttopblock">
                    <a href="#">
                        <img src="public/assets/users/img/baner1.jpg" alt="baner">
                    </a>
                </div>
                <div class="homepage__leftbottomblock">
                    <a href="#">
                        <img src="public/assets/users/img/baner2.jpg" alt="baner">
                    </a>
                </div>
            </div>

            <div class="homepage__rightblock">
                <div class="homepage__righttopblock">
                    <a href="#">
                        <img src="public/assets/users/img/baner3.jpg" alt="baner">
                    </a>
                </div>
                <div class="homepage__rightbottomblock">
                    <a href="#">
                        <img src="public/assets/users/img/baner4.jpg" alt="baner">
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="homepage__off">
        <div class="homepage__offwrapper">
            <a href="#">
                <img src="public/assets/users/img/baner-rings.jpg" alt="baner">
            </a>
        </div>
    </div>

    <div class="homepage__blog">
        <div class="homepage__blogwrapper">
            <div class="homepage__bloghdr">
                <span>НАШ БЛОГ</span>
            </div>
            <div class="homepage__blogcontent">
                @foreach($blogPosts as $post)
                    <div class="homepage__blogpost">
                        <a href="#">
                            <div class="homepage__blogpostimg">
                                <img src="public/assets/users/{{ $post->preview }}" alt="img">
                            </div>
                            <div class="homepage__blogpostcontent">
                                <span>{{ $post->title }}</span>
                                <span>Какой то текст поста, о чём то, ни кто не знает о чём</span>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="homepage__partners">
        <div class="homepage__partnerswrapper">
            <div class="homepage__partnershdr">
                <span>НАШИ ПАРТНЁРЫ</span>
            </div>
            <div class="homepage__partnerscurrent">
                <img src="public/assets/users/img/partners/sargon.jpg" alt="partner">
                <img src="public/assets/users/img/partners/sargon.jpg" alt="partner">
                <img src="public/assets/users/img/partners/sargon.jpg" alt="partner">
                <img src="public/assets/users/img/partners/sargon.jpg" alt="partner">
                <img src="public/assets/users/img/partners/sargon.jpg" alt="partner">
                <img src="public/assets/users/img/partners/sargon.jpg" alt="partner">
            </div>
        </div>
    </div>

    @include('layouts.footer')


</section>

<div class="top">
    <img src="public/assets/users/img/arrow.png" alt="up">
</div>

<script src="public/assets/users/js/scrollUp.js"></script>


</body>
</html>