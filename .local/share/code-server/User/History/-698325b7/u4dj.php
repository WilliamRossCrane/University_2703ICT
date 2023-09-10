@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Home</h1>
        <h2>Posts</h2>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" name="author" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>

                <ul class="list-group mt-3">
                    @forelse ($posts as $post)
                        <li class="list-group-item">
                            <a href="{{ route('posts.show', $post->id) }}">
                                {{ $post->title }}
                            </a>
                            <small class="text-muted">Author: {{ $post->author ?? 'Unknown' }}</small>
                            <p>Number of Comments
