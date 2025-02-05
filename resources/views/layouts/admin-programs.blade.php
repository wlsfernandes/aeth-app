<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Layout')</title>

    <!-- CSS from child views -->
    @yield('css')
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            color: white;
            padding: 1em;
            text-align: center;
        }

        .layout {
            display: flex;
            flex: 1;
        }

        .sidebar {
            width: 250px;
            padding-top: 1px;
            padding-left: 25px;
            //   box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar .nav {
            list-style: none;
            padding: 0;
        }

        .sidebar .nav-item {
            margin-bottom: 10px;
        }

        .sidebar .nav-link {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background: linear-gradient(to right, #6A5ACD, #E0E0E0);
            color: #fff;
        }

        .admin-content {
            flex: 1;
            padding: 20px;
            background-color: #fff;
        }

        footer {
            padding: 10px;
            background-color: #fff;
        }
    </style>
</head>

<body>

    <header>
        @include('partials.admin-header')
    </header>

    <div class="layout">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="nav nav-pills flex-column mb-auto">
                <li><a href="{{route('antioquiaExclusive')}}" class="nav-link link-dark">Antioquia</a></li>
                <li><a href="{{route('capacityBuildingExclusive')}}" class="nav-link link-dark">Capacity Building</a>
                </li>
                <li><a href="{{route('compellingPreachingExclusive')}}" class="nav-link link-dark">Compelling
                        Preaching</a></li>
                <li><a href="{{route('gonzalezExclusive')}}" class="nav-link link-dark">González Center</a></li>
                <li><a href="{{route('youngLideresExclusive')}}" class="nav-link link-dark">Young Líderes</a></li>
            </ul>
        </div>

        <!-- Main content -->
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
