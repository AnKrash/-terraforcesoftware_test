@extends('adminlte::page')

@section('title', 'Companies')

@section('content_header')
    <h1>Client and his companies</h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row ">
                        <h2 class="card-title col-8"> Company for client
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
                                                ID Company
                                            </th>
                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Browser: activate to sort column ascending"
                                                aria-sort="descending">Company
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($client->companies as $company)
                                            <div class="row">
                                                <tr class="odd">
                                                    <td class="dtr-control">
                                                        {{$company->id}}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{$company->name}}
                                                    </td>
                                                </tr>
                                            </div>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">ID C0mpany
                                            </th>
                                            <th rowspan="1" colspan="1">Company
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


