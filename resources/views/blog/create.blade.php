<!-- resources/views/blog/create.blade.php -->
@extends('layouts.app')

@section('content')
<h2>Create a New Post</h2>

<form method="post" action="{{ route('blog.store') }}">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" id="content" required>{{ old('content') }}</textarea>
    <br>
    <button type="submit">Create Post</button>
</form>

<a href="{{ route('blog.index') }}">Back to posts</a>
@endsection