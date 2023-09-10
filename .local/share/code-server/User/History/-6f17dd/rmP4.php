@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>Author: {{ $post->author }}</p>
    <p>Date: {{ $post->created_at->format('F d, Y') }}</p>
    <p>{{ $post->message }}</p>
    <hr>
    <h2>Comments</h2>
    @if ($post->comments->count() > 0)
        <ul>
            @foreach ($post->comments as $comment)
                <li>
                    <strong>{{ $comment->author }}:</strong> {{ $comment->message }}
                    <br>
                    <em>Date: {{ $comment->created_at->format('F d, Y') }}</em>
                    <br>
                    <!-- Add an Edit link here that directs to the comment edit route -->
                    <a href="{{ route('comments.edit', ['post' => $post, 'comment' => $comment]) }}">Edit</a>
                    <!-- Add a Delete link here that sends a DELETE request to delete the comment -->
                    <form action="{{ route('comments.destroy', ['post' => $post, 'comment' => $comment]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No comments available.</p>
    @endif
    <hr>
    <h2>Add Comment</h2>
    <form action="{{ route('comments.store', ['post' => $post]) }}" method="POST">
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
