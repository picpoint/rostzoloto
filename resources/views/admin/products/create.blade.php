@extends('admin.layouts.layout')



@section('content')

    <div class="card card-primary">


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card-header">
            <h3 class="card-title">Создание изделия</h3>
        </div>

        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название изделия</label>
                    <input type="text" name="title" class="form-control" id="title"
                           placeholder="Введите название изделия">
                </div>
            </div>

            <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                <label for="category_id">Выберите категорию</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option>---</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="vendor_code">Артикул изделия</label>
                    <input type="text" name="vendor_code" class="form-control" id="vendor_code"
                           placeholder="Введите артикул изделия">
                </div>
            </div>

            <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                <label for="material">Выбирите материал изделия</label>
                <select class="form-control" id="material" name="material">
                    <option>---</option>

                </select>
            </div>

            <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                <label for="stone">Выбирите вставку(камень)</label>
                <select class="form-control" id="stone" name="stone">
                    <option>---</option>
                </select>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="weight">Введите вес изделия</label>
                    <input type="text" name="weight" class="form-control" id="weight" placeholder="Вес изделия">
                </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="size">Введите размер изделия</label>
                    <input type="text" name="size" class="form-control" id="size" placeholder="Размер изделия">
                </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="price">Введите цену изделия</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Цена изделия">
                </div>
            </div>

            <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                <label for="picture">Загрузить изображение</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="form-control-file" name="picture" id="picture">
                        <label class="custom-file-label" for="picture">Выберите файл</label>
                    </div>
                </div>
            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

@endsection