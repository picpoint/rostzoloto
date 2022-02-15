@extends('admin.layouts.layout')


@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Посты блога</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 50px; text-align: center">#</th>
                    <th>Название поста блога</th>
                    <th>Изображение поста блога</th>
                    <th style="width: 400px; text-align: center">Действие</th>
                </tr>
                </thead>

                <tbody>
                {{--@foreach($categories as $category)--}}
                    {{--<tr>--}}
                        {{--<td style="width: 50px; text-align: center">{{ $category->id }}</td>--}}
                        {{--<td>{{ $category->title }}</td>--}}
                        {{--<td style="width: 400px; text-align: center">--}}
                            {{--<a href="#">--}}
                                {{--<button type="submit" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i>--}}
                                {{--</button>--}}
                            {{--</a>--}}

                            {{--<form action="#" method="post" enctype="multipart/form-data">--}}
                                {{--@csrf--}}
                                {{--@method('DELETE')--}}
                                {{--<button type="submit" class="btn btn-danger m-1">--}}
                                    {{--<i class="fas fa-trash-alt"></i>--}}
                                {{--</button>--}}
                            {{--</form>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
    </div>
@endsection