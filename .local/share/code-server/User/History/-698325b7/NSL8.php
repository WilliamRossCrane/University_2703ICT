@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Home</h1>
        <h2>Posts</h2>
        <div class="row">
            <div class="col-md-8">
                <!-- Form to create a new post -->
                @auth
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
                @endauth
                <!-- End of form -->

                <ul class="list-group mt-4">
                    @forelse ($posts as $post)
                        <li class="list-group-item">
                            <a href="{{ route('posts.show', $post->id) }}">
                                {{ $post->title }}
                            </a>
                            <small class="text-muted">Author: {{ $post->author ?? 'Unknown' }}</small>
                        </li>
                    @empty
                        <li class="list-group-item">No posts available.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection