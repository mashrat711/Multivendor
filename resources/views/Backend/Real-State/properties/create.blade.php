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

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Property</a>
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
                                        <form action="{{route('properties.store')}}" method="post" encType ="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Location</label>
                                                    <select name="location_id" id="">
                                                        @foreach($locations as $key => $location)
                                                            <option value="{{$key}}"> {{$location}}  </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Title</label>

                                                    <input id="userName-2b" name="title" type="text" class=" form-control"
                                                           value="{{ old("title") ? old("title") : (!empty($property) ? $property->title: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Type</label>

                                                    <input id="userName-2b" name="type" type="text" class=" form-control"
                                                           value="{{ old("type") ? old("type") : (!empty($property) ? $property->type: null) }}">
                                                </div>
                                            </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for=""  class="block">Bed</label>

                                            <input id="userName-2b" name="bed" type="text" class=" form-control"
                                                   value="{{ old("bed") ? old("bed") : (!empty($property) ? $property->bed: null) }}">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for=""  class="block">Bath</label>

                                            <input id="userName-2b" name="type" type="text" class=" form-control"
                                                   value="{{ old("bath") ? old("bath") : (!empty($property) ? $property->bath: null) }}">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for=""  class="block">Kitchen</label>

                                            <input id="userName-2b" name="kitchen" type="text" class=" form-control"
                                                   value="{{ old("kitchen") ? old("kitchen") : (!empty($property) ? $property->kitchen: null) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for=""  class="block">Living Room</label>

                                            <input id="userName-2b" name="living_room" type="text" class=" form-control"
                                                   value="{{ old("living_room") ? old("living_room") : (!empty($property) ? $property->living_room: null) }}">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for=""  class="block">Floor</label>

                                            <input id="userName-2b" name="floor" type="text" class=" form-control"
                                                   value="{{ old("floor") ? old("floor") : (!empty($property) ? $property->floor: null) }}">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for=""  class="block">Total Floor</label>

                                            <input id="userName-2b" name="total_floor" type="text" class=" form-control"
                                                   value="{{ old("total_floor") ? old("total_floor") : (!empty($property) ? $property->total_floor: null) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for=""  class="block">Pool</label>
                                            <input id="userName-2b" name="pool" type="text" class=" form-control"
                                                   value="{{ old("pool") ? old("pool") : (!empty($property) ? $property->pool: null) }}">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for=""  class="block">Internet</label>

                                            <input id="userName-2b" name="internet" type="text" class=" form-control"
                                                   value="{{ old("internet") ? old("internet") : (!empty($property) ? $property->internet: null) }}">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for=""  class="block">Cleaning</label>

                                            <input id="userName-2b" name="cleaning" type="text" class=" form-control"
                                                   value="{{ old("cleaning") ? old("cleaning") : (!empty($property) ? $property->cleaning: null) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for=""  class="block">Balcony</label>

                                            <input id="userName-2b" name="balcony" type="text" class=" form-control"
                                                   value="{{ old("balcony") ? old("balcony") : (!empty($property) ? $property->balcony: null) }}">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for=""  class="block">Insurance</label>

                                            <input id="userName-2b" name="insurance" type="text" class=" form-control"
                                                   value="{{ old("insurance") ? old("insurance") : (!empty($property) ? $property->insurance: null) }}">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for=""  class="block">Location</label>

                                            <input id="userName-2b" name="location" type="text" class=" form-control"
                                                   value="{{ old("location") ? old("location") : (!empty($property) ? $property->location: null) }}">
                                        </div>
                                    </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Property Type</label>

                                                    <input id="userName-2b" name="property_type" type="text" class=" form-control"
                                                           value="{{ old("property_type") ? old("property_type") : (!empty($property) ? $property->property_type: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Price</label>

                                                    <input id="userName-2b" name="price" type="text" class=" form-control"
                                                           value="{{ old("price") ? old("price") : (!empty($property) ? $property->price: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Construction Year</label>

                                                    <input id="userName-2b" name="construction_year" type="text" class=" form-control"
                                                           value="{{ old("construction_year") ? old("construction_year") : (!empty($result) ? $result->construction_year: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Status</label>

                                                    <input id="userName-2b" name="status" type="text" class=" form-control"
                                                           value="{{ old("subtitle") ? old("subtitle") : (!empty($result) ? $result->subtitle: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<label for=""  class="block">Context</label>--}}
                                                    {{--<textarea name="context" id="" cols="30" rows="10"--}}
                                                              {{--value="{{ old("context") ? old("context") :--}}
                                                              {{--(!empty($result) ? $result->context: null) }}"></textarea>--}}

                                                {{--</div>--}}
                                                <div class="col-sm-12">
                                                    <label for=""  class="block">Description</label>
                                                    <textarea name="description" id="" cols="30" rows="10"
                                                              value="{{ old("description") ? old("description") :
                                                              (!empty($result) ? $result->job_context: null) }}"></textarea>

                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Cover Photo:</label>
                                                    <input type="file" name="cover_image" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo 1:</label>
                                                    <input type="file" name="image1" class="form-control-file" id="exampleFormControlFile1">
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo 2:</label>
                                                    <input type="file" name="image2" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Photo 3:</label>
                                                    <input type="file" name="image3" class="form-control-file" id="exampleFormControlFile1">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for="exampleFormControlFile1">Video:</label>
                                                    <input type="file" name="video" class="form-control-file" id="exampleFormControlFile1">
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