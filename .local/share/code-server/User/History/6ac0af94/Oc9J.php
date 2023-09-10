@extends('layouts.app')

@section('content')
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
@endsection
