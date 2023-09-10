@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h2>Post Feed</h2>
            @foreach($posts as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Author: {{ $post->author }}</h6>
                        <p class="card-text">Number of Comments: {{ $post->comments_count }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="card-link">View Post</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-lg-6">
            <h2>Create a Post</h2>
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author:</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control" id="message" name="message" required>{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>
@endsection
