@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <form action="{{route('clients.update',[$client->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="updateCompany"> Update Client </label>

            <input type="text" class="form-control" name="name" value="{{$client->name}}"
                   placeholder="Update company">
        </div>

        <div class="card-footer">
            <button type="submit" class="btn-sm btn-primary">Submit</button>
        </div>
    </form>

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
