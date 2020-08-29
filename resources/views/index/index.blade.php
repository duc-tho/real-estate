@extends('index-master')

@section('title', $title ?? 'Real Estate site')

@section('head-import')
@include('index.components.head-import')
@endsection

@section('js-import')
@include('index.components.js-import')
@endsection

@section('main')
@include('index.main')
@endsection 
