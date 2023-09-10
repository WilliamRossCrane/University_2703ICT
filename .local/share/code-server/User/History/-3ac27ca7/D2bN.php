<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+k/fdfsfsfsFQ6pajs/rfdfs3SO+k/fd" crossorigin="anonymous">
    
    <!-- Add your CSS stylesheets here if needed -->
</head>
<body>
    <header>
        <!-- Bootstrap Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('posts.index') }}">Home</a> <!-- Link to the home page -->
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
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                </div>
                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" required>{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
            @endauth
        </div>
    </main>

    <footer>
        <!-- Add your site footer content here -->
    </footer>

    <!-- Bootstrap JavaScript (Popper.js is included for dropdowns, modals, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+k/fdfsfsfsFQ6pajs/rfdfs3SO+k/fd" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+k/fdfsfsfsFQ6pajs/rfdfs3SO+k/fd" crossorigin="anonymous"></script>
    
    <!-- Add your JavaScript scripts here if needed -->
</body>
</html>
