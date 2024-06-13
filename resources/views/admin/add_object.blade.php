@extends('admin.layouts.base')

@section('content')
    <div class="container">
        @if($table = 'users')
            <x-user-form-components/>
        @endif
    </div>
@endsection
