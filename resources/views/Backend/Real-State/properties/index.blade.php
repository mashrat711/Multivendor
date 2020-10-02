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
                            <h5 class="m-b-10">Real State</h5>
                            <a href="{{route('properties.create')}}">
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
                                        <h5>Data table</h5>
                                        <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Bed</th>
                                                    <th>Bath</th>
                                                    <th>Floor</th>
                                                    <th>Price</th>
                                                    <th>Type</th>
                                                    <th>Payment Type</th>
                                                    <th>Living Room</th>
                                                    <th>Kitchen</th>
                                                    <th>Property Type</th>
                                                    <th>Pool</th>
                                                    <th>Internet</th>
                                                    <th>Area</th>
                                                    <th>Construction Year</th>
                                                    <th>Location</th>
                                                    <th>Insurance</th>
                                                    <th>Parking</th>
                                                    <th>Status</th>
                                                    <th>Cover</th>
                                                    <th>Photo1</th>
                                                    <th>Photo2</th>
                                                    <th>Photo3</th>

                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($properties as $row)
                                                    <tr>
                                                        <td>{{$row->id}}</td>
                                                        <td><span class="label label-info">{{$row->title}}</span></td>
                                                        <td>{{$row->bed}}</td>
                                                        <td>{{$row->bath}}</td>
                                                        <td >{{$row->floor}}</td>
                                                        <td>{{$row->price}}</td>
                                                        <td>{{$row->type}}</td>
                                                        <td>{{$row->payment_type}}</td>
                                                        <td>{{$row->living_room}}</td>
                                                        <td>{{$row->kitchen}}</td>
                                                        <td>{{$row->property_type}}</td>
                                                        <td>{{$row->pool}}</td>
                                                        <td>{{$row->internet}}</td>
                                                        <td>{{$row->Area}}</td>
                                                        <td>{{$row->construction_year}}</td>
                                                        <td>{{$row->location}}</td>
                                                        <td>{{$row->insurance}}</td>
                                                        <td>{{$row->parking}}</td>
                                                        <td>{{$row->status}}</td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/Real-state/$row->cover_image")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/Real-state/$row->image3")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/Real-state/$row->image1")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/Real-state/$row->image2")}}' alt=""></td>


                                                        <td>
                                                            <div class="btn-group">
                                                                <a title="Details"  href='{{route('properties.show',$row->id)}}'  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>
                                                                </a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a title="Edit" href='{{route('properties.edit',$row->id)}}' class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

                                                            </div>
                                                            <!-- todo: have problem in mobile device -->
                                                            <div class="btn-group">
                                                                <form  class="myAction" method="POST" action="{{route('jobPosts.destroy',$row->id)}}">
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