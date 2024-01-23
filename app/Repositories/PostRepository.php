<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    public function getAll()
    {
        return Post::all();
    }

    public function getById($postId)
    {
        return Post::find($postId);
    }

    public function create($data)
    {
        return Post::create($data);
    }
}
