{{--@extends('adminlte::page')--}}

{{--@section('title', 'Companies')--}}

{{--@section('content_header')--}}
{{--    <h1>Companies</h1>--}}
{{--@stop--}}

{{--@section('content')--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @section('javascript' )
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    @endsection
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/xzoom/dist/xzoom.css" media="all"/>
    <title>Cars</title>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row ">
                        <h3 class="card-title col-8"> Companies DataTable </h3>
                        <a style="background-color: deepskyblue" class=" btn btn-info fa fa-plus-square "
                           href="{{route('cars.create')}}">
                            Create Company</a>
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
                                                ID
                                            </th>
                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="example2"
                                                rowspan="1" colspan="1"
                                                aria-label="Browser: activate to sort column ascending"
                                                aria-sort="descending">Company
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cars  as $car)
                                            <div class="row">
                                                <tr class="odd">
                                                    <td class="dtr-control">
                                                        {{$car->id}}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{$car->name}}
                                                    </td>
                                                    <td class="col-4 ">
                                                        <a class="btn btn-info fa fa-eye " aria-hidden="true"
                                                           href="{{route('cars.show',$car->id)}}"> Show
                                                            company</a>
                                                        <a style="background-color: green"
                                                           class="btn btn-info fa fa-pencil " aria-hidden="true"
                                                           href="{{route('cars.edit',$car->id)}}"> Update
                                                            company</a>
                                                    </td>
                                                    <td class="col-1">
                                                        <form method="POST" class=""
                                                              action="{{route('carss.destroy',$car->id)}}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <div class="form-group ">
                                                                <input type="submit"
                                                                       class="btn-sm btn-danger delete-company  fa fa-pencil"
                                                                       value="Delete company">
                                                            </div>
                                                        </form>

                                                    </td>
                                                </tr>
                                            </div>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">ID
                                            </th>
                                            <th rowspan="1" colspan="1">Company
                                            </th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            {{ $cars->links() }}
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

{{--@stop--}}
{{--@section('css')--}}
{{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
{{--@stop--}}

</body>
</html>
