<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Layout')</title>
    <!-- Add admin-specific CSS files here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
    <header>
    @include('partials.admin-header') 
    </header>
    
    <div class="admin-content">
        @yield('content')
    </div>

    @include('partials.footer') 
    <!-- Add admin-specific JavaScript files here -->
</body>
</html>
