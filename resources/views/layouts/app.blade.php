<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', __('meta.title'))</title>
  <meta name="description" content="@yield('meta-description', __('meta.description'))">
  <meta name="keywords" content="@yield('meta-keywords', __('meta.keywords'))">

  <link rel="canonical" href="{{ url()->current() }}">

  @include('partials.header')
  <!-- @yield('scripts') -->
</head>

<body>
  <div>
    @yield('content')
  </div>

  @include('partials.footer')
  @stack('scripts') <!-- Recommended location -->
</body>

</html>