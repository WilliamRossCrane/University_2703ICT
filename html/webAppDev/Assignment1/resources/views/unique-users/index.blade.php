@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page title -->
        <h1>Unique Users</h1>
        <!-- List of users -->
        <ul>
            @foreach ($users as $user)
                <li>
                    <!-- Link to user's details page -->
                    <a href="{{ route('unique-users.show', $user) }}">{{ $user->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
