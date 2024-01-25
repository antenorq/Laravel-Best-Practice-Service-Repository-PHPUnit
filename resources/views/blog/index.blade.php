<!-- resources/views/blog/index.blade.php -->
@extends('layouts.app')

@section('content')
<h2>Blog Posts</h2>


<a href="{{ route('blog.create') }}"><button type="button" class="btn btn-primary">Create a new post</button></a>

@foreach($posts as $post)
<div>
    <h3><a href="{{ route('blog.show', ['postId' => $post->id]) }}">{{ $post->title }}</a></h3>
    <p>{{ $post->content }}</p>
</div>
<hr>
@endforeach


@endsection