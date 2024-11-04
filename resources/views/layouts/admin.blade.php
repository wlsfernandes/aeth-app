<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Layout')</title>
    
    <!-- Add admin-specific CSS files here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Add other CSS files or @stack('styles') for custom styles -->
    @stack('styles')
</head>
<body>
    <header>
        @include('partials.admin-header')
    </header>
    
    <main class="admin-content">
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    <!-- Add admin-specific JavaScript files here -->
    @stack('scripts')

</body>
</html>
