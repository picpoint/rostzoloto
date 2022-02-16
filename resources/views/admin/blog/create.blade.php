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

        <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название поста блога</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Введите название">
                </div>
            </div>
            <div class="card-body">
                {{--<div class="form-group" id="blogpost" name="blogpost">--}}
                    {{--<input type="text" name="contentpost" class="form-control" id="contentpost" placeholder="Введите название поста">--}}
                {{--</div>--}}

                <textarea name="blogpost" id="blogpost" cols="30" rows="10">

                </textarea>

            </div>
            <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                <label for="preview">Загрузить изображение</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="form-control-file" name="preview" id="preview">
                        <label class="custom-file-label" for="preview">Выберите файл</label>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

@endsection