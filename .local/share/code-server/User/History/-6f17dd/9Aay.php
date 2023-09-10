@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>Author: {{ $post->author }}</p>
    <p>{{ $post->message }}</p>
    <hr>
    <h2>Comments</h2>
    <ul>
        @foreach ($post->comments as $comment)
            <li>
                <strong>{{ $comment->author }}:</strong> {{ $comment->message }}
                <a href="{{ route('comments.edit', ['post' => $post, 'comment' => $comment]) }}">Edit</a>
                <form action="{{ route('comments.destroy', ['post' => $post, 'comment' => $comment]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <hr>
    <h2>Add Comment</h2>
    <form action="{{ route('comments.store', $post) }}" method="post">
        @csrf
        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" value="{{ old('author') }}" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea name="message" required>{{ old('message') }}</textarea>
        </div>
        <button type="submit">Add Comment</button>
    </form>
    <!-- Display the user's name from the session -->
    <p>Logged in as: {{ session('user_name') }}</p>
@endsection
