<?php

namespace App\Repositories;

use App\Models\Post;
use DateTimeInterface;

class PostsRepository
{
    /**
     * @var Post
     */
    private Post $post;

    /**
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * @return Post[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->post->all();
    }

    /**
     * @param DateTimeInterface $date
     * @return mixed
     */
    public function removePostsOlderThan(DateTimeInterface $date)
    {
        return $this->post->where('created_at', '<', $date)->delete();
    }

    public function getWithCommentsLimit(int $postId)
    {
        return $this->post->where('id', $postId)->with([
            'comments' => function ($query) {
                $query->orderByDesc('created_at');
                $query->limit(env('POST_LIMIT'));
            }
        ])->first();
    }
}
