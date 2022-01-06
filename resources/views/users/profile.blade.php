<div class="personal__personaldata">
    <div class="personal__headerpersonal">
        <span>Личный кабинет</span>
    </div>
    <div class="personal__alldatas">
        <h3>ПРОФИЛЬ "{{ \Illuminate\Support\Facades\Auth::user()->firstname }}"</h3>
        <a href="{{ route('logout') }}">Выход</a>
    </div>


</div>

