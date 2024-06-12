@extends('admin.layouts.base')

@section('content')
    <div class="container">
        @if($table = 'users')
            <x-add-user-component/>
        @endif
    </div>
@endsection
