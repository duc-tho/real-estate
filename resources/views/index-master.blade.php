<!DOCTYPE html>
<html lang="vi">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="canonical" href="http://bdsnew.eso.vn/">
     <link rel="shortcut icon" href="{{ asset('dist/img/favicon.png') }}" type="image/x-icon">
     <title>Sàn BDS - @yield('title')</title>
     @yield('head-import')
</head>

<body class="sidebar-mini layout-fixed pace-success">
     @yield('main')
     @yield('js-import')
</body>

</html>
