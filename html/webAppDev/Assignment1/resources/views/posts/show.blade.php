@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($user))
            <!-- User posts -->
            <h1>{{ $user->name }}'s Posts</h1>
            <ul>
                @forelse ($posts as $post)
                    <!-- Post's title -->
                    <li>{{ $post->title }}</li>
                @empty
                    <!-- If no posts found -->
                    <li>No posts found for {{ $user->name }}</li>
                @endforelse
            </ul>
        @else
            <!-- Post section -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Post title -->
                    <h1>{{ $post->title }}</h1>
                    <!-- Post author and date -->
                    <p>Author: {{ $post->author }}</p>
                    <p>Date: {{ $post->created_at->format('F d, Y') }}</p>
                    <!-- Post message -->
                    <p>{{ $post->message }}</p>
                    <!-- Edit post button -->
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit Post</a>
                </div>
                <div class="col-md-6">
                    <!-- Comment section -->
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
                        <!-- Add comment button -->
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </form>
                </div>
            </div>
            <hr>
            <!-- Comments section -->
            <div class="row">
                <div class="col-md-6">
                    <h2>Comments</h2>
                    @if ($post->comments->count() > 0)
                        <ul>
                            @foreach ($post->comments as $comment)
                                <li>
                                    <!-- Comment author and message -->
                                    <strong>{{ $comment->author }}:</strong> {{ $comment->message }}
                                    <br>
                                    <!-- Comment date -->
                                    <em>Date: {{ $comment->created_at->format('F d, Y') }}</em>
                                    <br>
                                    <!-- Edit comment link -->
                                    <a href="{{ route('comments.edit', ['post' => $post, 'comment' => $comment]) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <!-- Delete comment form -->
                                    <form action="{{ route('comments.destroy', ['post' => $post, 'comment' => $comment]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <!-- Delete comment button -->
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <!-- No comments available -->
                        <p>No comments available.</p>
                    @endif
                </div>
            </div>
        @endif
    </div>
@endsection
