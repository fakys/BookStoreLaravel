@extends('admin.layouts.base')


@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/admin/index.css')}}">

    <div class="container">
        <table class="table table-index">
            <thead class="table-hover table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Добавить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data_table as $key=>$val)
                <tr>
                    <th>{{$key}}</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <div class="add-btn-table">
                            <img src="{{asset('assets/img/add-button.png')}}">
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
