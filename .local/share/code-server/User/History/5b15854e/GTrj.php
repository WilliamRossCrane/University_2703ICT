@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}'s Posts</h1>

    @foreach ($posts as $post)
        <div>
            <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->message }}</p>
            <!-- Add more information as needed -->
        </div>
    @endforeach
@endsection