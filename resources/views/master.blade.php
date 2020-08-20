<!DOCTYPE html>
<html lang="vi">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="{{ asset('dist/img/AdminLTELogo.png') }}" type="image/x-icon">
     <title>BDS - @yield('title')</title>
     @yield('head-import')
     @include('components.head-import')
</head>

<body class="sidebar-mini layout-fixed pace-success">
     @yield('main')
     @include('components.js-import')
     @yield('js-import')
</body>

</html>
