<?php

namespace App\Http\Controllers;

// use App\Models\Post;
// use App\Http\Requests\StorePostRequest;
// use App\Http\Requests\UpdatePostRequest;

use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        $posts = $this->blogService->getAllPosts();
        return view('blog.index', compact('posts'));
    }

    public function show($postId)
    {
        $post = $this->blogService->getPostById($postId);
        return view('blog.show', compact('post'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $this->blogService->createPost($data);

        return redirect()->route('blog.index');
    }
}
