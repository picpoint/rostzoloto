@extends('admin.layouts.layout')


@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Партнёры</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 50px; text-align: center">#</th>
                    <th>Партнёр</th>
                    <th>Лого партнёра</th>
                    <th style="width: 400px; text-align: center">Действие</th>
                </tr>
                </thead>

                <tbody>
                @foreach($partners as $partner)
                    <tr>
                        <td style="width: 50px; text-align: center; vertical-align: middle">{{ $partner->id }}</td>
                        <td style="vertical-align: middle">{{ $partner->title }}</td>
                        <td style="display: flex; justify-content: center"><img src="/public/assets/users/{{ $partner->picture }}" alt="picture" style="height: 100px"></td>
                        <td style="width: 400px; text-align: center">
                            <a href="{{route('partner.edit', ['partner' => $partner->id])}}">
                                <button type="submit" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i>
                                </button>
                            </a>

                            <form action="{{ route('partner.destroy', ['partner' => $partner->id]) }}" method="post" enctype="multipart/form-data">
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