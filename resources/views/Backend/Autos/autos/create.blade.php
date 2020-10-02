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
                            <h5 class="m-b-10">Result Data</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Create model</a>
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
                                        <form class="form-control-center" method="POST" encType ="multipart/form-data" action="{{route('autos.store')}}">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Category Name</label>
                                                    <select name="autoCategory_id" id="">
                                                        @foreach($categories as $key => $category)
                                                            <option value="{{$key}}"> {{$category}}  </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <select name="brand_id" id="">
                                                    @foreach($brands as $key => $brand)
                                                        <option value="{{$key}}"> {{$brand}}  </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for=""  class="block">Title</label>

                                                    <input id="userName-2b" name="name" type="text" class=" form-control"
                                                           value="{{ old("title") ? old("title") : (!empty($result) ? $result->title: null) }}">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for=""  class="block">Price</label>

                                                    <input id="userName-2b" name="price" type="text" class=" form-control"
                                                           value="{{ old("subtitle") ? old("subtitle") : (!empty($result) ? $result->subtitle: null) }}">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image_path" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Shippping Cost</label>

                                                    <input id="userName-2b" name="shipping_cost" type="text" class=" form-control"
                                                           value="{{ old("type") ? old("type") : (!empty($result) ? $result->subtitle: null) }}">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                <label for=""  class="block">Details</label>
                                            <textarea name="details" id="" cols="30" rows="10"  value="{{ old("type") ? old("type") :
                                             (!empty($result) ? $result->subtitle: null) }}"></textarea>

                                                 </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Description</label>
                                            <textarea name="description" id="" cols="30" rows="10"  value="{{ old("type") ? old("type") :
                                             (!empty($result) ? $result->subtitle: null) }}"></textarea>

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