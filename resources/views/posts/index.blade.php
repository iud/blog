@extends('layout.master')
@section('content')
    <div class="container">
        @foreach($posts as $post)
            @include('elements.card')
        @endforeach
    </div>
@endsection
