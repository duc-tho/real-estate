@extends('master')

@section('title', 'Admin')

@section('head-import')
@include('admin.components.head-import')
@endsection

@section('js-import')
@include('admin.components.js-import')
@endsection

@section('main')
<div class="wrapper">
     @include('admin.main')
</div>
@endsection
