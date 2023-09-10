@extends('layouts.app')

@section('content')
    <!-- User Posts Card -->
    <div class="card">
        <div class="card-header">
            <!-- Card Title with User's Name -->
            <h1 class="card-title">{{ $user->name }}'s Posts</h1>
        </div>
        <div class="card-body">
            @if ($posts->isEmpty())
                <!-- If there are no posts -->
                <p class="card-text">No posts available.</p>
            @else
                <!-- Loop through each post -->
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="card-body">
                            <!-- Post Title with Link to Post Details -->
                            <h2 class="card-title"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
                            <!-- Post Message -->
                            <p class="card-text">{{ $post->message }}</p>
                            <!-- You can add more information here if needed -->
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
