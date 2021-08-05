<div class="card my-1">
    <div class="card-header">
        #{{ $post->id }}
    </div>
    <div class="card-body">
        <a href="{{ route('posts.show', $post->id) }}">
            <h5 class="card-title">{{ $post->title }}</h5>
        </a>
    </div>
</div>
