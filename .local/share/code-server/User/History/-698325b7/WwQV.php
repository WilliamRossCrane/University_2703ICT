@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Home</h1>
        <h2>Posts</h2>
        <div class="row">
            <div class="col-md-8">
                <ul class="list-group">
                    @foreach ($posts as $post)
                        <li class="list-group-item">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->title }}
                            </a>
                            <small class="text-muted">Author: {{ $post->author }}</small>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
