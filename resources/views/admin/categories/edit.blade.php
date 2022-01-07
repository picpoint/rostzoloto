@extends('admin.layouts.layout')


@section('content')
    <div class="card card-primary">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card-header">
            <h3 class="card-title">Редактирование категории</h3>
        </div>

        <form action="{{ route('categories.update', ['category' => $category->id]) }}"  method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название категории</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $category->title }}">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>

@endsection