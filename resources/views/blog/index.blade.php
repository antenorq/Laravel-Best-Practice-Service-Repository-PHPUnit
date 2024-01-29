<!-- resources/views/blog/index.blade.php -->
@extends('layouts.app')

@section('content')
<h2>Blog Posts</h2>


<a href="{{ route('blog.create') }}"><button type="button" class="btn btn-primary">Create a new post</button></a>
<br><br><br><br>


@foreach($posts as $post)

<div class="card">
    <div class="card-header">
        <a href="{{ route('blog.show', ['postId' => $post->id]) }}">{{ $post->title }}</a>
    </div>
    <div class="card-body">
        {{ $post->content }}
    </div>
</div>
<br>


@endforeach


@endsection