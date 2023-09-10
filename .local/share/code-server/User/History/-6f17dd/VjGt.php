@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($user))
            <!-- User Posts Section -->
            <h1>{{ $user->name }}'s Posts</h1>
            <ul>
                @forelse ($posts as $post)
                    <!-- List each post's title -->
                    <li>{{ $post->title }}</li>
                @empty
                    <!-- If no posts found for the user -->
                    <li>No posts found for {{ $user->name }}</li>
                @endforelse
            </ul>
        @else
            <!-- Single Post Section -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Post Title -->
                    <h1>{{ $post->title }}</h1>
                    <!-- Post Author and Date -->
                    <p>Author: {{ $post->author }}</p>
                    <p>Date: {{ $post->created_at->format('F d, Y') }}</p>
                    <!-- Post Message -->
                    <p>{{ $post->message }}</p>
                    <!-- Edit Post Button -->
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit Post</a>
                </div>
                <div class="col-md-6">
                    <!-- Add Comment Section -->
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
                        <!-- Add Comment Button -->
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </form>
                </div>
            </div>
            <hr>
            <!-- Comments Section -->
            <div class="row">
                <div class="col-md-6">
                    <h2>Comments</h2>
                    @if ($post->comments->count() > 0)
                        <ul>
                            @foreach ($post->comments as $comment)
                                <li>
                                    <!-- Comment Author and Message -->
                                    <strong>{{ $comment->author }}:</strong> {{ $comment->message }}
                                    <br>
                                    <!-- Comment Date -->
                                    <em>Date: {{ $comment->created_at->format('F d, Y') }}</em>
                                    <br>
                                    <!-- Edit Comment Link -->
                                    <a href="{{ route('comments.edit', ['post' => $post, 'comment' => $comment]) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <!-- Delete Comment Form -->
                                    <form action="{{ route('comments.destroy', ['post' => $post, 'comment' => $comment]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <!-- Delete Comment Button -->
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <!-- If no comments available -->
                        <p>No comments available.</p>
                    @endif
                </div>
            </div>
        @endif
    </div>
@endsection
