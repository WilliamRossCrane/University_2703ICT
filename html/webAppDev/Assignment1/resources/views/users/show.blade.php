@extends('layouts.app')

@section('content')
    <!-- User posts -->
    <div class="card">
        <div class="card-header">
            <!-- User's Name -->
            <h1 class="card-title">{{ $user->name }}'s Posts</h1>
        </div>
        <div class="card-body">
            @if ($posts->isEmpty())
                <!-- If no posts -->
                <p class="card-text">No posts available.</p>
            @else
                <!-- Loop each post -->
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="card-body">
                            <!-- Post title, link to post details -->
                            <h2 class="card-title"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
                            <!-- Post message -->
                            <p class="card-text">{{ $post->message }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
