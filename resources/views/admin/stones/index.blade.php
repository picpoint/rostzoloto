@extends('admin.layouts.layout')


@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Таблица вставок</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 50px; text-align: center">#</th>
                    <th>Название вставки</th>
                    <th style="width: 400px; text-align: center">Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($stones as $stone)
                    <tr>
                        <td style="width: 50px; text-align: center">{{ $stone->id }}</td>
                        <td>{{ $stone->title }}</td>
                        <td style="width: 400px; text-align: center">
                            <a href="{{ route('stones.edit', ['stone' => $stone->id]) }}">
                                <button type="submit" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i>
                                </button>
                            </a>
                            <form action="{{ route('stones.destroy', ['stone' => $stone->id]) }}" method="post">
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