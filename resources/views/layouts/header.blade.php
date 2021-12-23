<div class="homepage__header">
    <div class="homepage__headerwrapper">
        <div class="homepage__post">
            <i class="fas fa-envelope"></i>
            <span>1@rostzoloto23.ru</span>
        </div>
        <div class="homepage__logo">
            <a href="/">
                <img src="public/assets/users/img/logo.png" alt="logo">
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
            <a href="#">АКЦИИ</a>
            <a href="#">КАТАЛОГ</a>
            <a href="#">ГАЛЕРЕЯ</a>
            <a href="#">СОВЕТЫ</a>
            <a href="#">ЛОМБАРДЫ</a>
            <a href="#">ПАРТНЁРЫ</a>
            <a href="#">О НАС</a>
            <a href="#">КОНТАКТЫ</a>

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