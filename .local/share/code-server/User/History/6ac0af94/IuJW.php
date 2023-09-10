@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Unique Users</h1>
        <ul class="list-group">
            <!-- Loop through $users if needed -->
            {{-- @foreach ($users as $user)
                <li class="list-group-item">
                    <a href="{{ route('unique-users.show', $user) }}">{{ $user->name }}</a>
                </li>
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

        <a href="{{ route('posts.create') }}">Create New Post</a>
    </div>
@endsection
