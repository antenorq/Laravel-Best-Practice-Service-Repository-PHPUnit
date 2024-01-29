<!-- resources/views/blog/create.blade.php -->
@extends('layouts.app')

@section('content')
<h2>Create a New Post</h2>

<form method="post" action="{{ route('blog.store') }}">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" name="content" id="content" required>{{ old('content') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Create a new post</button>
</form>

<br>

<a href="{{ route('blog.index') }}">Back to posts</a>
@endsection