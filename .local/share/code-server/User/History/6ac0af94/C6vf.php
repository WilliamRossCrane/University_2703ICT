@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Unique Users</h1>
        <ul>
            <!-- Loop through $users if needed -->
            {{-- @foreach ($users as $user)
                <li><a href="{{ route('unique-users.show', $user) }}">{{ $user->name }}</a></li>
            @endforeach --}}
        </ul>

        <h1>Posts</h1>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    <span>{{ $post->author }}</span>
                </li>
            @endforeach
        </ul>

        <!-- Display the user's name from the session -->
        <p>Logged in as: {{ session('user_name') }}</p>
        <a href="{{ route('posts.create') }}">Create New Post</a>
    </div>
@endsection
