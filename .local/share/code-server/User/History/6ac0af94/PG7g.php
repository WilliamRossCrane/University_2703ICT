@extends('layouts.app')

@section('content')
    <div class="container">
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
    </div>
@endsection
