<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    <!-- Bootstrap CSS (Bootstrap 5) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Add your CSS stylesheets here if needed -->
</head>
<body>
    <header>
        <!-- Bootstrap Navbar (Bootstrap 4) -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Home Page</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('unique-users.index') }}">Unique Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                    </li>
                </ul>

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
            @yield('content')
        </div>
    </main>

    <footer>
        <!-- Add your site footer content here -->
    </footer>

    <!-- Bootstrap JavaScript (Bootstrap 5) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+k/fdfsfsfsFQ6pajs/rfdfs3SO+k/fd" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+k/fdfsfsfsFQ6pajs/rfdfs3SO+k/fd" crossorigin="anonymous"></script>
    
    <!-- Add your JavaScript scripts here if needed -->
</body>
</html>
