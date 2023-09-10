@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">{{ $user->name }}'s Posts</h1>
        <ul class="list-group">
            @forelse ($posts as $post)
                <li class="list-group-item">{{ $post->title }}</li>
            @empty
                <li class="list-group-item">No posts found for {{ $user->name }}</li>
            @endforelse
        </ul>
    </div>
@endsection
