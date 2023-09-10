@extends('layouts.app') <!-- Extend the app layout -->

@section('content')
    <h1>Posts</h1>

    <!-- List of posts -->
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                <span>{{ $post->author }}</span>
            </li>
        @endforeach
    </ul>

    <!-- Form to create a new post -->
    @auth
    <h2>Create a New Post</h2>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" required>{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
    @else
    <!-- Show a message to log in if the user is not authenticated -->
    <p>Please <a href="{{ route('login') }}">log in</a> to create a new post.</p>
    @endauth

    <!-- Display the user's name from the session -->
    <p>Logged in as: {{ session('user_name') }}</p>

    <!-- Link to create a new post -->
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
@endsection
