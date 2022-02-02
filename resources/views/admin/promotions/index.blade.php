@extends('admin.layouts.layout')



@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список акций</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 50px; text-align: center">#</th>
                    <th>Название акции</th>
                    <th>Изображение</th>
                    <th style="width: 400px; text-align: center">Действие</th>
                </tr>
                </thead>
                <tbody>

                @foreach($allPromo as $promo)
                    <tr>
                        <td style="width: 50px; text-align: center; vertical-align: middle">{{ $promo->id }}</td>
                        <td style="vertical-align: middle">{{ $promo->title }}</td>
                        <td style="text-align: center">
                            <img src="/public/assets/users/{{ $promo->picture }}" alt="promo" style="width: 250px; height: 150px">
                        </td>
                        <td style="width: 400px; text-align: center; vertical-align: middle">
                            <a href="{{ route('promotions.edit', ['promotion' => $promo->id]) }}">
                                <button type="submit" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i>
                                </button>
                            </a>
                            <form method="post" action="{{ route('promotions.destroy', ['promotion' => $promo->id]) }}">
                                @csrf
                                @method('DELETE')
                                <a href="#">
                                    <button type="submit" class="btn btn-danger m-1">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </a>
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