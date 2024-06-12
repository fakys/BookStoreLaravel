@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <table class="table table-index">
            <thead class="table-hover table-primary">
            <tr>
                @foreach($column as $val)
                    <th class="text-center">{{Str::limit($val, 15)}}</th>
                @endforeach
                <th class="text-center">Редактировать</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data_model as $key=>$val)
                <tr>
                    @foreach($val as $value)
                    <th class="text-center">{{$value}}</th>
                    @endforeach
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
