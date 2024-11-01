<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Layout')</title>
    <!-- Add admin-specific CSS files here -->
</head>
<body>
    <header>
        <!-- Admin header, like admin navigation menu -->
    </header>
    
    <div class="admin-content">
        @yield('content')
    </div>

    <footer>
        <!-- Admin footer -->
    </footer>

    <!-- Add admin-specific JavaScript files here -->
</body>
</html>
