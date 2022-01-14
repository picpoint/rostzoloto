@extends('admin.layouts.layout')



@section('content')

    <div class="card card-primary">


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card-header">
            <h3 class="card-title">Автозагрузка</h3>
        </div>

        <form action="{{ route('uploadprod') }}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                <label for="autoload_file">Загрузить файл</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="form-control-file" name="autoload_file" id="autoload_file">
                        <label class="custom-file-label" for="autoload_file">Выберите файл</label>
                    </div>
                </div>
            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Начать автозагрузку</button>
            </div>
        </form>
    </div>

@endsection