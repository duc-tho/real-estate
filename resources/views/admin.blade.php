@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
     <h5 class="font-weight-bold">@yield('title')</h5>
@stop

@section('content')
     <div class="w-100 rounded mt-4 p-3" style="background: #fff; box-shadow: 0 3px 13px -10px #000;">
          @yield('mainContent')
     </div>
@stop
