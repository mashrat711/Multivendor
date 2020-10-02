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
                            <h5 class="m-b-10">Car Specification Model</h5>
                            <a href="{{route('car_galleries.create')}}">
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
                                        <h5>Exam table</h5>
                                        <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>1</th>
                                                    <th>2</th>
                                                    <th>3</th>
                                                    <th>4</th>
                                                    <th>5</th>
                                                    <th>6</th>
                                                    <th>7</th>
                                                    <th>8</th>
                                                    <th>9</th>
                                                    <th>10</th>
                                                    <th>11</th>
                                                    <th>12</th>

                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($galleries as $row)
                                                    <tr>
                                                        <td>{{$row->id}}</td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image1")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image2")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image3")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image4")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image5")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image6")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image7")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image8")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image9")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image10")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image11")}}' alt=""></td>
                                                        <td><img class="d-flex align-self-center img-radius" style="height: 70px;width: 83px"
                                                                 src='{{asset("images/car/$row->image12")}}' alt=""></td>

                                                        <td>
                                                            {{--<div class="btn-group">--}}
                                                                {{--<a title="Details"  href='{{route('car_models.store')}}'  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>--}}
                                                                {{--</a>--}}
                                                            {{--</div>--}}
                                                            <div class="btn-group">
                                                                <a title="Edit" href='{{route('car_galleries.edit',$row->id)}}' class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

                                                            </div>
                                                            <!-- todo: have problem in mobile device -->
                                                            <div class="btn-group">
                                                                <form  class="myAction" method="POST" action="{{route('car_galleries.destroy',$row->id)}}">
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