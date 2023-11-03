<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@php
    $appName = request()->get('appName') ?? config('app.name', 'Real Estate');

    if (View::hasSection('title')) {
        $appName .= ' - ';
    }
@endphp

<head>
    <title>{{$appName}}@yield('title')</title>

    @hasSection('title')
        <meta name="title" content="@yield('title')">
    @endif

    @hasSection('meta-description')
        <meta name="description" content="@yield('meta-description')">
    @endif

    @hasSection('meta-keywords')
        <meta name="keywords" content="@yield('meta-keywords')">
    @endif

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="language" content="Vietnamese, vn">
    <meta name="revisit-after" content="1 days">
    <meta name="robots" content="@yield('meta-robots', 'index, follow')"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="canonical" href="{{ env('APP_URL') }}">
    <link rel="shortcut icon" href="{{ asset('storage/assets/images/favicon.png') }}" type="image/x-icon">
    @vite(['resources/js/app.js'])
</head>

<body>
    <!-- Page Content -->
    @yield('content')
</body>

</html>
