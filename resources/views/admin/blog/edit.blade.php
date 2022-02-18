@extends('admin.layouts.layout')


@section('content')
    <div class="card card-primary">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card-header">
            <h3 class="card-title">Редактирование поста блога</h3>
        </div>

        <form action="{{ route('blog.update', ['blog' => $blog->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Редактирование поста блога</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $blog->title }}">
                </div>
            </div>
            <div class="card-body">
                <textarea name="blogpost" id="blogpost" cols="30" rows="10">
                    {{ $blog->content }}
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
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>

@endsection