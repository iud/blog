<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\PostsRepository;

class PostsController extends Controller
{
    private PostsRepository $postsRepository;

    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function index()
    {
        return view('posts.index',
            [
                'posts' => $this->postsRepository->getAll()
            ]);
    }


    /**
     * @param int $postId
     */
    public function show(int $postId)
    {
        return view('posts.show',
            [
                'post' => $this->postsRepository->getWithCommentsLimit($postId)
            ]);
    }
}
