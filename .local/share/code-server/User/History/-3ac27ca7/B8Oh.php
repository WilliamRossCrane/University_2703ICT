<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application</title>
    <!-- Add your CSS stylesheets and JavaScript scripts here -->
</head>
<body>
    <header>
        <!-- Add your site header content here -->
        <nav>
            <ul>
                <li><a href="{{ route('posts.index') }}">Home</a></li>
                <!-- Add more navigation links as needed -->
                @auth
                <li><a href="{{ route('users.show', Auth::user()) }}">My Profile</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content') <!-- This is where the content of individual pages will be inserted -->
        </div>
    </main>

    <footer>
        <!-- Add your site footer content here -->
    </footer>
</body>
</html>
