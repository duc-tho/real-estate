<!DOCTYPE html>
<html lang="vi">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="{{ asset('image/src/Logo.png') }}" type="image/x-icon">
     <title>BDS - @yield('title')</title>
     @include('components.head-import')
     @yield('head-import')
</head>

<body class="sidebar-mini layout-fixed">
     @yield('main')
     @yield('js-import')
     @include('components.js-import')
</body>

</html>
