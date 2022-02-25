<div class="homepage__header">
    <div class="homepage__headerwrapper">
        <div class="homepage__post">
            <i class="fas fa-envelope"></i>
            <span>1@rostzoloto23.ru</span>
        </div>
        <div class="homepage__logo">
            <a href="/">
                <img src="/public/assets/users/img/logo.png" alt="logo">
            </a>
        </div>
        <div class="homepage__phone">
            <i class="fas fa-phone-alt"></i>
            <span>+7(988)168-43-62</span>
        </div>
    </div>
</div>

<div class="homepage__navbar">
    <div class="homepage__navbarwrapper">
        <div class="homepage__navigation">
            <a href="{{ route('promo') }}">АКЦИИ</a>
            <a href="{{ route('catalog') }}">КАТАЛОГ</a>
            <a href="{{ route('gallery') }}">ГАЛЕРЕЯ</a>
            <a href="{{ route('blog') }}">БЛОГ</a>
            <a href="{{ route('lombards') }}">ЛОМБАРДЫ</a>
            <a href="{{ route('partner') }}">ПАРТНЁРЫ</a>
            <a href="#">САЛОНЫ</a>
            <a href="{{ route('about') }}">О НАС</a>

        </div>
        <div class="homepage__profile">
            <a href="{{ route('personal') }}">
                <i class="fas fa-user"></i>

                @if(Auth::user())
                    <span>{{Auth::user()->firstname }}</span>
                @endif

            </a>
        </div>
    </div>
</div>