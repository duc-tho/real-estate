<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="{{ env('APP_URL') }}">
    <link rel="shortcut icon" href="{{ asset('storage/assets/images/favicon.png') }}" type="image/x-icon">

    <title>{{ request()->get('appName') ?? config('app.name', 'Real Estate') }} - @yield('title')</title>

    @vite(['resources/js/app.js'])
</head>

<body>
    <!-- Page Content -->
    @yield('content')
</body>

</html>
