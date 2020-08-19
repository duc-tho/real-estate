@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
     <h1>
          <h5 style="color: #333">@yield('title')</h5>
     </h1>
@stop

@section('content')
     <div class="w-100 rounded mt-4 p-3" style="background: #fff; box-shadow: 0 3px 13px -10px #000;">
          @yield('mainContent')
     </div>
@stop
