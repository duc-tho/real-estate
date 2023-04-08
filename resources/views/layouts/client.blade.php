@extends('layouts.master')

@section('content')
    <header>
        @include('client.components.header')
    </header>

    <main class="my-5">
        @yield('page')
    </main>

    <footer>
        @include('client.components.footer')
    </footer>
@endsection
