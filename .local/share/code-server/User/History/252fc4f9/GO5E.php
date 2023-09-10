@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Unique Users</h1>
        <ul>
            @foreach ($users as $user)
                <li><a href="{{ route('unique-users.show', $user) }}">{{ $user->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
