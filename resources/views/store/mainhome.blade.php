@extends('store.template')

@section('main')

@include('store.partials.navigation', ['desplegado' => true])

@yield('content')

@stop