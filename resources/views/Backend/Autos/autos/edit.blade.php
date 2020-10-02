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
                                        <form action="{{url("autos/$autos->id")}}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Category Name</label>
                                                    <select name="autoCategory_id" id="">
                                                        @foreach($categories as $key => $category)
                                                            <option value="{{$key}}"> {{$category}}  </option>
                                                        @endforeach
                                                    </select> >
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for=""  class="block">Title</label>

                                                    <input id="userName-2b" name="title" type="text" class=" form-control"
                                                           value="{{ old("title") ? old("title") : (!empty($autos) ? $autos->title: null) }}">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for=""  class="block">Price</label>

                                                    <input id="userName-2b" name="price" type="text" class=" form-control"
                                                           value="{{ old("subtitle") ? old("subtitle") : (!empty($autos) ? $autos->price: null) }}">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo:</label>
                                                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"value="{{ old("type") ?
                                                     old("type") : (!empty($autos) ? $autos->image: null) }}>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for=""  class="block">Discount Price</label>

                                                    <input id="userName-2b" name="discount_price" type="text" class=" form-control"
                                                           value="{{ old("type") ? old("type") : (!empty($autos) ? $autos->discount_price: null) }}">
                                                </div>

                                            </div>
                                            <textarea name="description" id="" cols="30" rows="10" >Description</textarea>



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