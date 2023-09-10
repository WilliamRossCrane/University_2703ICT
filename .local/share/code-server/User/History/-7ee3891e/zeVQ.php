@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" value="{{ old('author') }}" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <!-- Correct the name attribute to "message" -->
            <textarea name="message" required>{{ old('message') }}</textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>
@endsection
