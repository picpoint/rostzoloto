@extends('admin.layouts.layout')


@section('content')
    <div class="card card-primary">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card-header">
            <h3 class="card-title">Создание поста блога</h3>
        </div>

        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название поста блога</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Введите название">
                </div>
            </div>
            <div class="card-body">
                <div class="form-group" id="blogpost">
                    <input type="text" name="contentpost" class="form-control" id="contentpost" placeholder="Введите название поста">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

@endsection