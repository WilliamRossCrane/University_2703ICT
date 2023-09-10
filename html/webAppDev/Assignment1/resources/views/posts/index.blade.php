@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Posts section -->
        <h1>Posts</h1>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <!-- View a post -->
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    <!-- Display post's author -->
                    <span>{{ $post->author }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
