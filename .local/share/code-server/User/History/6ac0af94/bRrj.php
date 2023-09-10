@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Section for Unique Users -->
        <ul class="list-group">
            <!-- Loop through $users if needed -->
            {{-- @foreach ($users as $user)
                <li class="list-group-item">
                    <a href="{{ route('unique-users.show', $user) }}">{{ $user->name }}</a>
                </li>
            @endforeach --}}
        </ul>

        <!-- Section for Posts -->
        <h1>Posts</h1>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <!-- Link to view a post -->
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    <!-- Display the post's author -->
                    <span>{{ $post->author }}</span>
                </li>
            @endforeach
        </ul>

        <!-- Link to create a new post -->
        <a href="{{ route('posts.create') }}">Create New Post</a>
    </div>
@endsection
