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
                                <li class="breadcrumb-item"><a href="">Create results</a>
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
                                        <form action="{{url("car_specifications/$car_specification->id")}}" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="form-group row">
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
                                                           value="{{ old("overview") ? old("overview") : (!empty($car_specification) ? $car_specification->overview: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Short description</label>

                                                    <input id="userName-2b" name="short_description" type="text" class=" form-control"
                                                           value="{{ old("short_description") ? old("short_description") : (!empty($car_specification) ? $car_specification->short_description: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">flexibility</label>

                                                    <input id="userName-2b" name="flexibility" type="text" class=" form-control"
                                                           value="{{ old("flexibility") ? old("flexibility") : (!empty($car_specification) ? $car_specification->flexibility: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">displacement</label>

                                                    <input id="userName-2b" name="displacement" type="text" class=" form-control"
                                                           value="{{ old("displacement") ? old("displacement") : (!empty($car_specification) ? $car_specification->displacement: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">power_kw</label>

                                                    <input id="userName-2b" name="power_kw" type="text" class=" form-control"
                                                           value="{{ old("power_kw") ? old("power_kw") : (!empty($car_specification) ? $car_specification->power_kw: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">power_hp</label>

                                                    <input id="userName-2b" name="power_hp" type="text" class=" form-control"
                                                           value="{{ old("power_hp") ? old("power_hp") : (!empty($car_specification) ? $car_specification->power_hp: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">fuel_consumption_urban</label>

                                                    <input id="userName-2b" name="fuel_consumption_urban" type="text" class=" form-control"
                                                           value="{{ old("fuel_consumption_urban") ? old("fuel_consumption_urban") : (!empty($car_specification) ? $car_specification->fuel_consumption_urban: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">fuel_consumption_nonurban</label>

                                                    <input id="userName-2b" name="fuel_consumption_nonurban" type="text" class=" form-control"
                                                           value="{{ old("fuel_consumption_nonurban") ? old("fuel_consumption_nonurban") : (!empty($car_specification) ? $car_specification->fuel_consumption_nonurban: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">co2_emission</label>

                                                    <input id="userName-2b" name="co2_emission" type="text" class=" form-control"
                                                           value="{{ old("co2_emission") ? old("co2_emission") : (!empty($car_specification) ? $car_specification->co2_emission: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">length</label>

                                                    <input id="userName-2b" name="length" type="text" class=" form-control"
                                                           value="{{ old("length") ? old("length") : (!empty($car_specification) ? $car_specification->length: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">width</label>

                                                    <input id="userName-2b" name="width" type="text" class=" form-control"
                                                           value="{{ old("width") ? old("width") : (!empty($car_specification) ? $car_specification->width: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">height</label>

                                                    <input id="userName-2b" name="height" type="text" class=" form-control"
                                                           value="{{ old("height") ? old("height") : (!empty($car_specification) ? $car_specification->height: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">wheelbase</label>

                                                    <input id="userName-2b" name="wheelbase" type="text" class=" form-control"
                                                           value="{{ old("wheelbase") ? old("wheelbase") : (!empty($car_specification) ? $car_specification->wheelbase: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">drag_co_efficient</label>

                                                    <input id="userName-2b" name="drag_co_efficient" type="text" class=" form-control"
                                                           value="{{ old("drag_co_efficient") ? old("drag_co_efficient") : (!empty($car_specification) ? $car_specification->drag_co_efficient: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">unladen_weight_eu</label>

                                                    <input id="userName-2b" name="unladen_weight_eu" type="text" class=" form-control"
                                                           value="{{ old("unladen_weight_eu") ? old("unladen_weight_eu") : (!empty($car_specification) ? $car_specification->unladen_weight_eu: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">speed</label>

                                                    <input id="userName-2b" name="speed" type="text" class=" form-control"
                                                           value="{{ old("speed") ? old("speed") : (!empty($car_specification) ? $car_specification->speed: null) }}">
                                                </div>
                                            </div> <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">acceleration</label>

                                                    <input id="userName-2b" name="acceleration" type="text" class=" form-control"
                                                           value="{{ old("acceleration") ? old("acceleration") : (!empty($car_specification) ? $car_specification->acceleration: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">in_gear_acceleration</label>

                                                    <input id="userName-2b" name="in_gear_acceleration" type="text" class=" form-control"
                                                           value="{{ old("in_gear_acceleration") ? old("in_gear_acceleration") : (!empty($car_specification) ? $car_specification->in_gear_acceleration: null) }}">
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