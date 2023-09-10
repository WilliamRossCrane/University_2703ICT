@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}'s Posts</h1>

    @if ($posts === null)
        <p>No posts available.</p>
    @elseif ($posts->isEmpty())
        <p>No posts available.</p>
    @else
        @foreach ($posts as $post)
            <div>
                <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
                <p>{{ $post->message }}</p>
                <!-- Add more information as needed -->
            </div>
        @endforeach
    @endif
@endsection
