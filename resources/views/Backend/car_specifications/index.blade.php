@extends('Backend.master')
@section('content')


    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Car Specification Data</h5>


                            <a href="{{route('car_specifications.create')}}">
                                <button type="button" class="btn btn-success waves-effect m-b-10 float-right"
                                        data-target="#myModal">Add New </button>
                            </a>





                        </div>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger"> {{$error}} </div>
                            @endforeach
                        @endif

                    </div>

                    <!-- Page-header end -->



                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">

                            <!-- Individual Column Searching (Text Inputs) start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Car Specification table</h5>
                                        <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>overview</th>
                                                    <th>short_description</th>
                                                    <th>displacement</th>
                                                    <th>power_kw</th>
                                                    <th>power_hp</th>
                                                    <th>Number Of Cylinder</th>
                                                    <th>fuel_consumption_urban</th>
                                                    <th>fuel_consumption_nonurban</th>
                                                    <th>co2_emission</th>
                                                    <th>length</th>
                                                    <th>width</th>
                                                    <th>height</th>
                                                    <th>wheelbase</th>
                                                    <th>drag_co_efficient</th>
                                                    <th>unladen_weight_eu</th>
                                                    <th>Type</th>
                                                    <th>Seat</th>
                                                    <th>status</th>
                                                    <th>system</th>
                                                    <th>Min Year</th>
                                                    <th>Max Year</th>
                                                    <th>speed</th>
                                                    <th>acceleration</th>
                                                    <th>Flexibility</th>
                                                    <th>in_gear_acceleration</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($cars as $row)
                                                    <tr>
                                                        <td>{{$row->id}}</td>
                                                        <td>{{$row->overview}}</td>
                                                        <td>{{$row->short_description}}</td>
                                                        <td>{{$row->displacement}}</td>
                                                        <td>{{$row->power_kw}}</td>
                                                        <td>{{$row->power_hp}}</td>
                                                        <td>{{$row->number_of_cylinder}}</td>
                                                        <td>{{$row->fuel_consumption_urban}}</td>
                                                        <td>{{$row->fuel_consumption_nonurban}}</td>
                                                        <td>{{$row->co2_emission}}</td>
                                                        <td>{{$row->length}}</td>
                                                        <td>{{$row->width}}</td>
                                                        <td>{{$row->height}}</td>
                                                        <td>{{$row->wheelbase}}</td>
                                                        <td>{{$row->drag_co_efficient}}</td>
                                                        <td>{{$row->unladen_weight_eu}}</td>
                                                        <td>{{$row->type}}</td>
                                                        <td>{{$row->seat}}</td>
                                                        <td>{{$row->status}}</td>
                                                        <td>{{$row->system}}</td>

                                                        <td>{{$row->min_year}}</td>
                                                        <td>{{$row->max_year}}</td>
                                                        <td>{{$row->speed}}</td>
                                                        <td>{{$row->acceleration}}</td>
                                                        <td><span class="label label-info">{{$row->flexibility}}</span></td>
                                                        <td><span class="label label-primary">{{$row->in_gear_acceleration}}</span></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a title="Details"  href='{{route('car_specifications.show',$row->id)}}'  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>
                                                                </a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a title="Edit" href='{{route('car_specifications.edit',$row->id)}}' class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

                                                            </div>
                                                            <!-- todo: have problem in mobile device -->
                                                            <div class="btn-group">
                                                                <form  class="myAction" method="POST" action="{{route('car_specifications.destroy',$row->id)}}">
                                                                    @csrf
                                                                    <input name="_method" type="hidden" value="DELETE">
                                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                                        <i class="fa fa-fw fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>

<!-- Individual Column Searching (Text Inputs) end -->
                                </div></div></div></div></div></div></div>
                                @endsection