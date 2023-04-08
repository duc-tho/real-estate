@extends('layouts.master')

@section('content')
    @include('client.layouts.header')

    @yield('page')

    @include('client.layouts.footer')
@endsection
