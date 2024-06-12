@extends('admin.layouts.base')


@section('content')
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('assets/img/blue-logo.png')}}" alt="AdminLTELogo" width="200">
    </div>
    <div class="container">
        <table class="table table-index">
            <thead class="table-hover table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Название таблицы</th>
                <th scope="col">Добавить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data_tables as $key=>$val)
                <tr>
                    <th>{{$key}}</th>
                    <th><a href="{{route('admin.show_model', ['table'=>$val::get_name_table()])}}">{{$val::$name_table}}</a></th>
                    <th>{{$val::get_name_table()}}</th>
                    <td>
                        <div class="add-btn-table">
                            <a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
