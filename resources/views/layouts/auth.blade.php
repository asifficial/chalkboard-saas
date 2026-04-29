<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.app.head')
</head>
<body class="@yield('body-class')">
    @yield('content')

    @stack('footer-scripts')
</body>
</html>