@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cars</h1>
@stop

@section('content')
    <form action="{{route('cars.update',[$car->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="updateCar"> Update Car </label>

            <input type="text" class="form-control" name="name" value="{{$car->name}}"
                   placeholder="Update car">
        </div>

        <div class="card-footer">
            <button type="submit" class="btn-sm btn-primary">Submit</button>
        </div>
    </form>

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
