<!-- resources/views/blog/show.blade.php -->
@extends('layouts.app')

@section('content')
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>

<a href="{{ route('blog.index') }}">Back to posts</a>
@endsection