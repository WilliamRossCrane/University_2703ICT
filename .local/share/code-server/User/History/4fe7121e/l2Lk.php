@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Posts</h1>
        <ul>
            @forelse ($posts as $post)
                <li>{{ $post->title }}</li>
            @empty
                <li>No posts found for {{ $user->name }}</li>
            @endforelse
        </ul>
    </div>
@endsection
