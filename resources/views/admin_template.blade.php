@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2><a href="{{route('clients.index')}}">Clients</a></h2>

        </div>
        <div class="p-6 bg-white border-b border-gray-200">
            <h2><a href="{{route('cars.index')}}">Cars</a></h2>
        </div>
        @stop
        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
@stop

