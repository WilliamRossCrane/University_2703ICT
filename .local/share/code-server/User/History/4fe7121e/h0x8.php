@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Unique Users</h1>
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->author }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <p>No posts found for {{ $user->name }}</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
