@extends('adminlte::page')

@section('title', 'Cars')

@section('content_header')
    <h1>Car with clients</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row ">
                        <h2 class="card-title col-8"> Clients of {{$car->name}}:</h2>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2"
                                           class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                           aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Rendering engine: activate to sort column ascending">
                                                ID Client
                                            </th>
                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Browser: activate to sort column ascending"
                                                aria-sort="descending">Client
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($car->clients as $client)
                                            <div class="row">
                                                <tr class="odd">
                                                    <td class="dtr-control">
                                                        {{$client->id}}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{$client->name}}
                                                    </td>
                                                </tr>
                                            </div>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">ID Client
                                            </th>
                                            <th rowspan="1" colspan="1">Client
                                            </th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <script src="https://use.fontawesome.com/4523420eae.js"></script>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


