@extends('layout.master')
@section('content')
    <div class="card my-1">
        <div class="card-header">
            #{{ $post->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            Komentarze:
            @foreach($post->comments as $comment)
                <div class="row border-bottom">
                    <p>#{{ $comment->id }} by <strong>{{ $comment->username }}</strong></p>
                    <p>{{ $comment->content }}</p>
                    <p><small>{{ $comment->created_at }}</small></p>
                </div>
            @endforeach
        </div>
    </div>

@endsection
