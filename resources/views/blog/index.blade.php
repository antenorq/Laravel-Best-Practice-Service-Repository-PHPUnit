<!-- resources/views/blog/index.blade.php -->
@extends('layouts.app')

@section('content')
<h2>Blog Posts</h2>

@foreach($posts as $post)
<div>
    <h3><a href="{{ route('blog.show', ['postId' => $post->id]) }}">{{ $post->title }}</a></h3>
    <p>{{ $post->content }}</p>
</div>
<hr>
@endforeach

<a href="{{ route('blog.create') }}">Create a new post</a>
@endsection