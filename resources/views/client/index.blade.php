{{--//@extends('adminlte::page')--}}

@section('title', 'Companies')

@section('content_header')
    <h1>Clients</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row ">
                        <h3 class="card-title col-8"> Clients DataTable </h3>
                        <a style="background-color: deepskyblue" class=" btn btn-info fa fa-plus-square "
                           href="{{route('clients.create')}}">
                            Create Client</a>
                    </div>
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
                                                ID
                                            </th>
                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Browser: activate to sort column ascending"
                                                aria-sort="descending">Client
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($clients  as $client)
                                            <tr class="odd">
                                                <td class="dtr-control">
                                                    {{$client->id}}
                                                </td>
                                                <td class="sorting_1">
                                                    {{$client->name}}
                                                </td>
                                                <td class="col-4 ">
                                                    <a class="btn btn-info fa fa-eye " aria-hidden="true"
                                                       href=
                                                       "{{route('clients.show',$client->id)}}"
                                                    > Show
                                                        client</a>
                                                    <a class="btn btn-info fa fa-pencil " aria-hidden="true"
                                                       href="{{route('clients.edit',$client->id)}}"
                                                       style="background-color: green"> Update
                                                        client</a>
                                                </td>
                                                <td class="col-1">
                                                    <form method="POST" class=""
                                                          action="{{route('clients.destroy',$client->id)}}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <div class="form-group ">
                                                            <input type="submit"
                                                                   class="btn-sm btn-danger delete-client  fa fa-pencil"
                                                                   value="Delete client">
                                                        </div>
                                                    </form>

                                                </td>


                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">ID
                                            </th>
                                            <th rowspan="1" colspan="1">Client
                                            </th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            {{ $clients->links() }}
                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>
    <script src="https://use.fontawesome.com/4523420eae.js"></script>

@stop
@section('css')
{{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

