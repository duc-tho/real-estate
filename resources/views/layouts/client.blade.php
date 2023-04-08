@extends('layouts.master')

@section('content')
    <header>
        @include('client.components.header')
    </header>

    <main class="my-5">
        @yield('page')
    </main>

    <footer class="text-light p-4">
        @include('client.components.footer')
    </footer>
@endsection
