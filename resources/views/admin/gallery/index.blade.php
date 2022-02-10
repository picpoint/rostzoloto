@extends('admin.layouts.layout')


@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Таблица альбомов</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 50px; text-align: center">#</th>
                    <th>Название альбома</th>
                    <th>Изображение</th>
                    <th style="width: 400px; text-align: center">Действие</th>
                </tr>
                </thead>
                <tbody>

                @foreach($res as $rs)
                    <tr>
                        <td style="width: 50px; text-align: center">{{ $rs->id }}</td>
                        <td>{{ $rs->title }}</td>
                        <td><img src="/public/assets/users/{{ $rs->preview }}" alt="preview" style="width: 100px; height: 100px"></td>
                        <td style="width: 400px; text-align: center; vertical-align: middle">
                            <form method="post" action="{{ route('gallery.destroy', ['gallery' => $rs->title]) }}">
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