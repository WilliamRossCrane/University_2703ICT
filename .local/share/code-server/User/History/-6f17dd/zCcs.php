@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($user))
            <h1>{{ $user->name }}'s Posts</h1>
            <ul>
                @forelse ($posts as $post)
                    <li>{{ $post->title }}</li>
                @empty
                    <li>No posts found for {{ $user->name }}</li>
                @endforelse
            </ul>
        @else
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ $post->title }}</h1>
                    <p>Author: {{ $post->author }}</p>
                    <p>Date: {{ $post->created_at->format('F d, Y') }}</p>
                    <p>{{ $post->message }}</p>
                    <!-- Add an Edit button for the post that directs to the post edit route -->
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit Post</a>
                </div>
                <div class="col-md-6">
                    <h2>Add Comment</h2>
                    <form action="{{ route('comments.store', ['post' => $post]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="author" class="form-label">Author:</label>
                            <input type="text" class="form-control" name="author" value="{{ old('author') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message:</label>
                            <textarea class="form-control" name="message" required>{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
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
                                    <a href="{{ route('comments.edit', ['post' => $post, 'comment' => $comment]) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <!-- Add a Delete link here that sends a DELETE request to delete the comment -->
                                    <form action="{{ route('comments.destroy', ['post' => $post, 'comment' => $comment]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No comments available.</p>
                    @endif
                </div>
            </div>
        @endif
    </div>
@endsection
