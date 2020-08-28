@extends('index-master')

{{-- @section('title', $title ?? 'Admin') --}}

@section('head-import')
@include('index.components.head-import')
@endsection

@section('js-import')
@include('index.components.js-import')
@endsection

@section('main')
@include('index.main')
@endsection
