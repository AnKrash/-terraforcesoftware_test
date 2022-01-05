@extends('adminlte::page')

@section('title', 'Clients')

@section('content_header')
    <h1>Clients</h1>
@stop

@section('content')
    <form action="{{route('clients.update',[$client->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="updateClient"> Update Client </label>

            <input type="text" class="form-control" name="name" value="{{$client->name}}"
                   placeholder="Update client">
        </div>

        <div class="card-footer">
            <button type="submit" class="btn-sm btn-primary">Submit</button>
        </div>
    </form>

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
