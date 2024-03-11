
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Soccer App</title>
    <!-- Link to CSS frameworks like Bootstrap here -->
    <link rel="stylesheet" href="{{ asset('css\styles.css') }}">
</head>
<body>
    <div class="container">
    <header>
        <!-- Navigation bar, logo, etc. -->
    </header>
    </div>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content here -->
    </footer>
</body>
</html>
