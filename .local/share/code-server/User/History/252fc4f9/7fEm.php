@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Title -->
        <h1>Unique Users</h1>
        <!-- List of Users -->
        <ul>
            @foreach ($users as $user)
                <li>
                    <!-- Link to User's Details Page -->
                    <a href="{{ route('unique-users.show', $user) }}">{{ $user->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
