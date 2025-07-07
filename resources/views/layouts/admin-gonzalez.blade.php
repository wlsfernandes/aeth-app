<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Layout')</title>
    @yield('css')

<body>

    <header>
        @include('partials.admin-gonzalez-header')
    </header>

    <div class="layout">
        <main class="admin-content">
            @yield('content')
        </main>
    </div>

    <footer>
        @include('partials.footer')
    </footer>

    <!-- JavaScript from child views -->
    @yield('scripts')
</body>