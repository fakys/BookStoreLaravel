@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <form method="post" action="{{route('admin.store_object', ['table'=>$table])}}" enctype="multipart/form-data">
            @csrf
        @if($table == 'users')
            <x-users-form-component/>
        @elseif($table =='categories')
            <x-category-form-component/>
        @elseif($table =='genres')
            <x-genre-form-component/>
        @elseif($table =='tags')
            <x-tag-form-component/>
        @elseif($table =='authors')
            <x-author-form-component/>
        @elseif($table =='users_groups')
            <x-user-group-form-component/>
        @endif
            <div><input type="submit" class="btn btn-primary" value="Создать"></div>
        </form>
    </div>
@endsection
