<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title> <!-- Updated title to "Homepage" -->
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+k/fdfsfsfsFQ6pajs/rfdfs3SO+k/fd" crossorigin="anonymous">
    
    <!-- Add your CSS stylesheets here if needed -->
</head>
<body>
    <header>
        <!-- Bootstrap Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('posts.index') }}">Homepage</a> <!-- Updated link text to "Homepage" -->
                <a href="{{ route('unique-users.index') }}">Unique Users</a>

                <!-- Add more navigation links as needed -->
                @auth
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.show', Auth::user()) }}">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link">Logout</button>
                        </form>
                    </li>
                </ul>
                @endauth
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-5">
            @yield('content') <!-- This is where the content of individual pages will be inserted -->

            <!-- Form to create a new post -->
            @auth
            <h2>Create a New Post</h2>
            <form action="{{ route('posts.store') }}" method="
