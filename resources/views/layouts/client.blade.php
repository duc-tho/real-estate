@extends('layouts.master')

@section('content')
    <header>
        @include('client.section.header')
        @include('client.section.banner')
    </header>

    <main class="my-5">
        @yield('page')
    </main>

    <footer class="text-light p-4">
        @include('client.section.footer')
    </footer>
@endsection
