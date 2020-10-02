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
                            <h5 class="m-b-10">Job Categories</h5>

                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href=""> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">job Posts</a>
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
                                        <form action="{{route('jobPosts.store')}}" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Job Category</label>
                                                    <select name="job_category_id" id="">
                                                        @foreach($job_categories as $key => $category)
                                                            <option value="{{$key}}"> {{$category}}  </option>
                                                        @endforeach
                                                    </select> >
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Title</label>

                                                    <input id="userName-2b" name="title" type="text" class=" form-control"
                                                           value="{{ old("title") ? old("title") : (!empty($result) ? $result->title: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Vacancy</label>

                                                    <input id="userName-2b" name="vacancy" type="text" class=" form-control"
                                                           value="{{ old("vacancy") ? old("vacancy") : (!empty($result) ? $result->vacancy: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Salary</label>

                                                    <input id="userName-2b" name="salary" type="text" class=" form-control"
                                                           value="{{ old("salary") ? old("salary") : (!empty($result) ? $result->salary: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Deadline</label>

                                                    <input id="userName-2b" name="deadline" type="text" class=" form-control"
                                                           value="{{ old("deadline") ? old("deadline") : (!empty($result) ? $result->deadline: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Location</label>

                                                    <input id="userName-2b" name="location" type="text" class=" form-control"
                                                           value="{{ old("location") ? old("location") : (!empty($result) ? $result->location: null) }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Status</label>

                                                    <input id="userName-2b" name="status" type="text" class=" form-control"
                                                           value="{{ old("subtitle") ? old("subtitle") : (!empty($result) ? $result->subtitle: null) }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Context</label>
                                                    <textarea name="job_context" id="" cols="30" rows="10"
                                                              value="{{ old("job_context") ? old("job_context") :
                                                              (!empty($result) ? $result->job_context: null) }}"></textarea>

                                                </div>
                                                <div class="col-sm-6">
                                                    <label for=""  class="block">Requirements</label>

                                                   <textarea name="requirements" id="" cols="30" rows="10"
                                                             value="{{ old("job_context") ? old("job_context") :
                                                              (!empty($result) ? $result->job_context: null) }}"></textarea>
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