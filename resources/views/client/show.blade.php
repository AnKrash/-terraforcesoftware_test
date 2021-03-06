@extends('adminlte::page')

@section('title', 'Clients')

@section('content_header')
    <h1>Client and his cars</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row ">
                        <h2 class="card-title col-8"> Car for client
                            {{$client->name}}:
                        </h2>

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
                                                ID Car
                                            </th>
                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Browser: activate to sort column ascending"
                                                aria-sort="descending">Car
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($client->cars as $car)
                                            <div class="row">
                                                <tr class="odd">
                                                    <td class="dtr-control">
                                                        {{$car->id}}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{$car->name}}
                                                    </td>
                                                </tr>
                                            </div>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">ID Car
                                            </th>
                                            <th rowspan="1" colspan="1">Car
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


