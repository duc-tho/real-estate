<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="{{ env('APP_URL') }}">
    <link rel="shortcut icon" href="{{ asset('dist/img/favicon.png') }}" type="image/x-icon">

    <title>{{ config('app.name', 'Real Estate') }} - @yield('title')</title>

     <!-- Scripts -->
     <script src="{{ asset('dist/js/app.js') }}" defer></script>

     <!-- Styles -->
     <link href="{{ asset('dist/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    @yield('content')
</body>

</html>
