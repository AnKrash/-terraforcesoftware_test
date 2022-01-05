@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cars</h1>
@stop

@section('content')
    <form action="{{route('cars.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="createCar"> Create Car </label>
            <input type="text" class="form-control" name="name" id="createCar" placeholder="Enter car">
        </div>

        <div class="card-footer">
            <button type="submit" class="btn-sm btn-primary">Submit</button>
        </div>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
