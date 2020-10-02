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
                            <h5 class="m-b-10">Job Post</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Create post</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger"> {{$error}} </div>
                    @endforeach
                @endif

                <!-- Page-header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">



                                <div class="page-header card">
                                    <div class="card-block">
                                        <form action="{{url("jobCategories/$jobCategory->id")}}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="form-group row">
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <label for=""  class="block">Title</label>

                                                        <input id="userName-2b" name="title" type="text" class=" form-control"
                                                               value="{{ old("title") ? old("title") : (!empty($jobCategory) ? $jobCategory->title: null) }}">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for=""  class="block">Subtitle</label>

                                                        <input id="userName-2b" name="subtitle" type="text" class=" form-control"
                                                               value="{{ old("subtitle") ? old("subtitle") : (!empty($jobCategory) ? $jobCategory->subtitle: null) }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit">Submit</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection