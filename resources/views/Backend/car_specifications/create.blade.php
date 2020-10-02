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
                            <h5 class="m-b-10">Add Data</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""></a>
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
                                        <form action="{{route('car_specifications.store')}}" method="post">
                                            @csrf
                                            {{--<div class="form-group row">--}}
                                                {{--<div class="col-sm-6">--}}
                                                    {{--<label for=""  class="block">Brand Name</label>--}}
                                                    {{--<select name="car_brand_id" id="">--}}
                                                        {{--@foreach($carBrand ?? '' as $key => $brand)--}}
                                                            {{--<option value="{{$key}}"> {{$brand}}  </option>--}}
                                                        {{--@endforeach--}}
                                                    {{--</select> >--}}
                                                {{--</div>--}}

                                            {{--</div>--}}
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                <label for=""  class="block">Brand Name</label>
                                                <select name="car_brand_id" id="">
                                                @foreach($carBrand  as $key => $brand)
                                                <option value="{{$key}}"> {{$brand}}  </option>
                                                @endforeach
                                                </select> >
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Modal Name</label>
                                                    <select name="car_model_id" id="">
                                                        @foreach($carModel as $key => $student)
                                                            <option value="{{$key}}"> {{$student}}  </option>
                                                        @endforeach
                                                    </select> >
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Overview</label>

                                                    <input id="userName-2b" name="overview" type="text" class=" form-control"
                                                           value="{{ old("overview") ? old("overview") : (!empty($result) ? $result->overview: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Short description</label>

                                                    <input id="userName-2b" name="short_description" type="text" class=" form-control"
                                                           value="{{ old("short_description") ? old("short_description") : (!empty($result) ? $result->short_description: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">flexibility</label>

                                                    <input id="userName-2b" name="flexibility" type="text" class=" form-control"
                                                           value="{{ old("flexibility") ? old("flexibility") : (!empty($result) ? $result->flexibility: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">displacement</label>

                                                    <input id="userName-2b" name="displacement" type="text" class=" form-control"
                                                           value="{{ old("displacement") ? old("displacement") : (!empty($result) ? $result->displacement: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">power_kw</label>

                                                    <input id="userName-2b" name="power_kw" type="text" class=" form-control"
                                                           value="{{ old("power_kw") ? old("power_kw") : (!empty($result) ? $result->power_kw: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">power_hp</label>

                                                    <input id="userName-2b" name="power_hp" type="text" class=" form-control"
                                                           value="{{ old("power_hp") ? old("power_hp") : (!empty($result) ? $result->power_hp: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">fuel_consumption_urban</label>

                                                    <input id="userName-2b" name="fuel_consumption_urban" type="text" class=" form-control"
                                                           value="{{ old("fuel_consumption_urban") ? old("fuel_consumption_urban") : (!empty($result) ? $result->fuel_consumption_urban: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">fuel_consumption_nonurban</label>

                                                    <input id="userName-2b" name="fuel_consumption_nonurban" type="text" class=" form-control"
                                                           value="{{ old("fuel_consumption_nonurban") ? old("fuel_consumption_nonurban") : (!empty($result) ? $result->fuel_consumption_nonurban: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">co2_emission</label>

                                                    <input id="userName-2b" name="co2_emission" type="text" class=" form-control"
                                                           value="{{ old("co2_emission") ? old("co2_emission") : (!empty($result) ? $result->co2_emission: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">length</label>

                                                    <input id="userName-2b" name="length" type="text" class=" form-control"
                                                           value="{{ old("length") ? old("length") : (!empty($result) ? $result->length: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">width</label>

                                                    <input id="userName-2b" name="width" type="text" class=" form-control"
                                                           value="{{ old("width") ? old("width") : (!empty($result) ? $result->width: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">height</label>

                                                    <input id="userName-2b" name="height" type="text" class=" form-control"
                                                           value="{{ old("height") ? old("height") : (!empty($result) ? $result->height: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">wheelbase</label>

                                                    <input id="userName-2b" name="wheelbase" type="text" class=" form-control"
                                                           value="{{ old("wheelbase") ? old("wheelbase") : (!empty($result) ? $result->wheelbase: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">drag_co_efficient</label>

                                                    <input id="userName-2b" name="drag_co_efficient" type="text" class=" form-control"
                                                           value="{{ old("drag_co_efficient") ? old("drag_co_efficient") : (!empty($result) ? $result->drag_co_efficient: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">unladen_weight_eu</label>

                                                    <input id="userName-2b" name="unladen_weight_eu" type="text" class=" form-control"
                                                           value="{{ old("unladen_weight_eu") ? old("unladen_weight_eu") : (!empty($result) ? $result->unladen_weight_eu: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">speed</label>

                                                    <input id="userName-2b" name="speed" type="text" class=" form-control"
                                                           value="{{ old("speed") ? old("speed") : (!empty($result) ? $result->speed: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">acceleration</label>

                                                    <input id="userName-2b" name="acceleration" type="text" class=" form-control"
                                                           value="{{ old("acceleration") ? old("acceleration") : (!empty($result) ? $result->acceleration: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">in_gear_acceleration</label>

                                                    <input id="userName-2b" name="in_gear_acceleration" type="text" class=" form-control"
                                                           value="{{ old("in_gear_acceleration") ? old("in_gear_acceleration") : (!empty($result) ? $result->in_gear_acceleration: null) }}">
                                                </div>
                                            </div>
                                   <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Type</label>

                                                    <input id="userName-2b" name="type" type="text" class=" form-control"
                                                           value="{{ old("type") ? old("type") : (!empty($result) ? $result->type: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Status</label>

                                                    <select name="status" id="cars">
                                                        <option value="on">New</option>
                                                        <option value="">Used</option>

                                                    </select>


                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">System</label>

                                                    <input id="userName-2b" name="system" type="text" class=" form-control"
                                                           value="{{ old("system") ? old("type") : (!empty($result) ? $result->system: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Seat</label>

                                                    <input id="userName-2b" name="seat" type="text" class=" form-control"
                                                           value="{{ old("seat") ? old("seat") : (!empty($result) ? $result->seat: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Min Year</label>

                                                    <input id="userName-2b" name="min_year" type="text" class=" form-control"
                                                           value="{{ old("min_year") ? old("min_year") : (!empty($result) ? $result->type: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Max Year</label>

                                                    <input id="userName-2b" name="max_year" type="text" class=" form-control"
                                                           value="{{ old("max_year") ? old("max_year") : (!empty($result) ? $result->type: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Number Of Cylinder</label>

                                                    <input id="userName-2b" name="number_of_cylinder" type="text" class=" form-control"
                                                           value="{{ old("number_of_cylinder") ? old("number_of_cylinder") : (!empty($result) ? $result->type: null) }}">
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