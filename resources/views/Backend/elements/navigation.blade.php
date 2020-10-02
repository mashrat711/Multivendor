<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        {{--<div class="pcoded-navigation-label">Navigation</div>--}}
        {{--<ul class="pcoded-item pcoded-left-item">--}}
            {{--<li class="pcoded-hasmenu {{'dashboard' == request()->path() ? 'active' :''}}">--}}
                {{--<a href="/dashboard">--}}
                    {{--<span class="pcoded-micon"><i class="fa fa-user"></i><b>P</b></span>--}}
                    {{--<span class="pcoded-mtext">Dashboard</span>--}}

                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="pcoded-hasmenu {{'student.create' == request()->path() ? 'active' :''}}">--}}
                {{--<a href="{{route('student.create')}}">--}}
                    {{--<span class="pcoded-micon"><i class="fa fa-file-text"></i><b>P</b></span>--}}
                    {{--<span class="pcoded-mtext">Admission</span>--}}
                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}

            {{--</li>--}}
            {{--<li class="pcoded-hasmenu {{'student' == request()->path() ? 'active' :''}}">--}}
                {{--<a href="/student">--}}
                    {{--<span class="pcoded-micon"><i class="fa fa-user"></i><b>P</b></span>--}}
                    {{--<span class="pcoded-mtext">Student</span>--}}
                    {{--<span class="pcoded-badge label label-warning">NEW</span>--}}
                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}

            {{--</li>--}}
            {{--<li class="">--}}
                {{--<a href="navbar-light.html">--}}
                    {{--<span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>--}}
                    {{--<span class="pcoded-mtext">Navigation</span>--}}
                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}
            {{--</li>--}}

            {{--<li class="{{'Teacher' == request()->path() ? 'active' :''}}">--}}
                {{--<a href="/Teacher">--}}
                    {{--<span class="pcoded-micon"><i class="fa fa-users"></i><b>N</b></span>--}}
                    {{--<span class="pcoded-mtext">Teacher</span>--}}
                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}
            {{--</li>--}}
           {{----}}

            {{--<li class="{{'Calender' == request()->path() ? 'active' :''}}">--}}
                {{--<a href="/Calender">--}}
                    {{--<span class="pcoded-micon"><i class="ti-calendar"></i><b>N</b></span>--}}
                    {{--<span class="pcoded-mtext">Calender</span>--}}
                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}
            {{--</li>--}}

            {{--<li class="{{'Routine' == request()->path() ? 'active' :''}}">--}}
                {{--<a href="/Routine">--}}
                    {{--<span class="pcoded-micon"><i class="fa fa-bookmark"></i><b>N</b></span>--}}
                    {{--<span class="pcoded-mtext">Class Routine</span>--}}
                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--@endcan--}}
            {{--<li class="{{'classes' == request()->path() ? 'active' :''}}">--}}
                {{--<a href="/classes">--}}
                    {{--<span class="pcoded-micon"><i class="fa fa-book"></i><b>N</b></span>--}}
                    {{--<span class="pcoded-mtext">Courses</span>--}}
                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="{{'Notices' == request()->path() ? 'active' :''}}">--}}
                {{--<a href="/Notices">--}}
                    {{--<span class="pcoded-micon"><i class="fa fa-comment"></i><b>N</b></span>--}}
                    {{--<span class="pcoded-mtext">Notice</span>--}}
                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}
            {{--</li><li class="{{'Schedule' == request()->path() ? 'active' :''}}">--}}
                {{--<a href="/Schedule">--}}
                    {{--<span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>--}}
                    {{--<span class="pcoded-mtext">Schedule</span>--}}
                    {{--<span class="pcoded-mcaret"></span>--}}
                {{--</a>--}}
            {{--</li>--}}

        {{--</ul>--}}
{{--@can('attendance')--}}

        <div class="pcoded-navigation-label">Fashion Products</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="pcoded-hasmenu {{'attendences' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-file-text"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Categories</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'categories.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('properties.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">All Categories</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'categories.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('properties.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Create Categories</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu {{'attendences' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-file-text"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Products</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'products.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('products.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">All Products</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'categories.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('products.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Create Categories</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        {{--<div class="pcoded-navigation-label">Navigation</div>--}}
        <div class="pcoded-navigation-label">Real-State</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="pcoded-hasmenu {{'attendences' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-file-text"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Real-State</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'properties.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('properties.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">All Properties</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'properties.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('properties.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Create Properties</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigation-label">Jobs</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="pcoded-hasmenu {{'attendences' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-file-text"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Job Category</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'jobCategories.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('jobCategories.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">All Categories</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'jobCategories.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('jobCategories.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Create Categories</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu {{'attendences' == request()->path() ? 'active' :''}}">
                <a href="{{route('jobApplicants.index')}}">
                    <span class="pcoded-micon"><i class="fa fa-file-text"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Job Applicants</span>
                    <span class="pcoded-mcaret"></span>
                </a>

            </li>
        </ul>


        <div class="pcoded-navigation-label">Car & Autos</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="pcoded-hasmenu {{'' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-crown"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Car Brands</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'car_brands.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('car_brands.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">All Brands</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'car_brands.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('car_brands.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Add Brands</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu {{'' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-crown"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Car Models</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'car_models.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('car_models.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">All Models</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'car_models.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('car_models.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Add models</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu {{'' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-crown"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Car Description</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'car_models.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('car_specifications.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">All Descriptions</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'car_specifications.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('car_specifications.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Add Description</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
{{--@can('userManagement')--}}
        <div class="pcoded-navigation-label">User Management</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{'users' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-pencil-square-o"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Users</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'users.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('users.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Users List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" {{'users.create' == request()->path() ? 'active' :''}}">
                        <a href="{{route('users.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Create User</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu {{'roles' == request()->path() ? 'active' :''}} ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-pencil-square-o"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Roles</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{'roles.index' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('roles.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Role List</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'roles.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('roles.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Create roles</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu {{'permissions' == request()->path() ? 'active' :''}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-pencil-square-o"></i><b>AC</b></span>
                    <span class="pcoded-mtext">Permissions</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{'permissions.index' == request()->path() ? 'active' :''}}">
                        <a href="{{route('permissions.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Permissions</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{'permissions.create' == request()->path() ? 'active' :''}} ">
                        <a href="{{route('permissions.create')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Manage Permissions</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    {{--@endcan--}}










    </div>

</nav>