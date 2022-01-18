@extends('admin.layouts.layout')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Таблица изделий</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Название изделия</th>
                    <th>Изображение</th>
                    <th style="width: 120px; text-align: center">Действие</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)
                    <tr>
                        <td style="width: 10px">{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td><img src="/public/assets/users/{{$product->picture}}" alt=""
                                 style="width: 140px; height: 140px"></td>
                        <td style="width: 120px; text-align: center">
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}">
                                <button type="submit" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i>
                                </button>
                            </a>
                            <form method="post" action="{{ route('products.destroy', ['product' => $product->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
    </div>
@endsection