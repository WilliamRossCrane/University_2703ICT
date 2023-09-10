@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Unique Users</h1>

        <!-- Check if there are posts to display -->
        <div class="row">
            @forelse ($posts as $post)
                <!-- Display each post in a card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Post Title -->
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <!-- Author of the Post -->
                            <p class="card-text">{{ $post->author }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Display a message if no posts found -->
                <div class="col">
                    <p>No posts found for {{ $user->name }}</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
