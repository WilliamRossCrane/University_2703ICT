@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post) }}" method="post">
            @csrf <!-- CSRF protection -->
            @method('PUT') <!-- Use the PUT method for updating -->

            <div class="form-group">
                <label for="title">Title:</label>
                <!-- Input field for updating the post title -->
                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <!-- Textarea for updating the post message -->
                <textarea name="message" class="form-control" rows="3" required>{{ $post->message }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
@endsection
