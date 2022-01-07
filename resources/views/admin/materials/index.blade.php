@extends('admin.layouts.layout')



@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Таблица материалов</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 50px; text-align: center">#</th>
                    <th>Название материала</th>
                    <th style="width: 400px; text-align: center">Действие</th>
                </tr>
                </thead>
                <tbody>

                @foreach($materials as $material)
                    <tr>
                        <th style="width: 50px; text-align: center">{{ $material->id }}</th>
                        <th>{{ $material->title }}</th>
                        <th style="width: 400px; text-align: center">
                            <a href="{{ route('materials.edit', ['material' => $material->id]) }}">
                                <button type="submit" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i>
                                </button>
                            </a>
                            <form method="post" action="{{ route('materials.destroy', ['material' => $material->id]) }}">
                                @csrf
                                @method('DELETE')
                                <a href="#">
                                    <button type="submit" class="btn btn-danger m-1">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </a>
                            </form>
                        </th>
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