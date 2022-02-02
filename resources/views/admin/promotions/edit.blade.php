@extends('admin.layouts.layout')


@section('content')
    <div class="card card-primary">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card-header">
            <h3 class="card-title">Редактирование акции</h3>
        </div>

        <form action="{{ route('promotions.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название акции</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Отредактируйте название акции" value="{{ $promo->title }}">
                    <textarea name="content" id="content" class="form-control" cols="30" rows="15" style="margin-top: 30px;">
                        {{ $promo->content }}
                    </textarea>
                </div>
                <img src="/public/assets/users/{{ $promo->picture }}" alt="promo" style="width: 170px; height: 100px">
                <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                    <label for="picture">Загрузить изображение</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="form-control-file" name="picture" id="picture">
                            <label class="custom-file-label" for="picture">Выберите файл</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>

@endsection