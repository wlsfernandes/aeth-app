<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Layout')</title>

    <!-- Admin-specific CSS files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Custom styles pushed from child views -->
    @stack('styles')
</head>

<body>
    <!-- Header Section -->
    <header>
        @include('partials.admin-header')
    </header>

    <!-- Main Content Section -->
    <main class="admin-content">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        @include('partials.footer')
    </footer>

    <!-- Core and child-specific JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Ensure this is only included once -->
    @stack('scripts')
</body>

</html>
