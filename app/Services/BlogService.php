<?php

namespace App\Services;

use App\Repositories\PostRepository;

class BlogService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts()
    {
        return $this->postRepository->getAll();
    }

    public function getPostById($postId)
    {
        return $this->postRepository->getById($postId);
    }

    public function createPost($data)
    {
        return $this->postRepository->create($data);
    }
}
