@extends('layouts.master')

@section('content')
    <header>
        @include('client.components.header')
        @include('client.components.banner')
    </header>

    <main class="my-5">
        @yield('page')
    </main>

    <footer class="text-light p-4">
        @include('client.components.footer')
    </footer>
@endsection
