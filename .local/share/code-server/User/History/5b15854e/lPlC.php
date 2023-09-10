@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">{{ $user->name }}'s Posts</h1>
        </div>
        <div class="card-body">
            @if ($posts->isEmpty())
                <p class="card-text">No posts available.</p>
            @else
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="card-title"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
                            <p class="card-text">{{ $post->message }}</p>
                            <!-- Add more information as needed -->
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
