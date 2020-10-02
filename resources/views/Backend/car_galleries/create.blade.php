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
                                        <form action="{{route('car_galleries.store')}}" method="post" encType ="multipart/form-data">
                                            @csrf
                                            <div class="col-sm-6">
                                                <label for=""  class="block">Modal Name</label>
                                                <select name="car_model_id" id="">
                                                    @foreach($carModel as $key => $student)
                                                        <option value="{{$key}}"> {{$student}}  </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image1" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image2" class="form-control-file" id="exampleFormControlFile1">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image3" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image4" class="form-control-file" id="exampleFormControlFile1">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image5" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image6" class="form-control-file" id="exampleFormControlFile1">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image7" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image8" class="form-control-file" id="exampleFormControlFile1">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image9" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image10" class="form-control-file" id="exampleFormControlFile1">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image11" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image12" class="form-control-file" id="exampleFormControlFile1">
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