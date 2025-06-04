<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'AETH')</title>

    <meta name="description" content="@yield('meta-description', 'Default description')">
    <meta name="keywords" content="@yield('meta-keywords', 'default, keywords')">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'AETH')</title>
    <meta name="description" content="@yield('meta-description', 'Default description')">
    <meta name="keywords" content="@yield('meta-keywords', 'default, keywords')">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/template/images/favicon.png') }}">

    <!-- CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/template/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/plugins/jodit.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/template/css/styles.css') }}">
    @include('partials.header')
    @yield('scripts')
</head>

<body>
    <div>

        @yield('content')

    </div>
    @include('partials.footer')
</body>

</html>