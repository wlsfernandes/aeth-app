<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'AETH')</title>
    <meta name="description" content="@yield('meta-description', 'Default description')">
    <meta name="keywords" content="@yield('meta-keywords', 'default, keywords')">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/assets/images/favicon.png') }}">

    <!-- CSS  -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/plugins/jodit.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/assets/css/styles.css') }}">
    @include('partials.header')
    @stack('styles')
</head>