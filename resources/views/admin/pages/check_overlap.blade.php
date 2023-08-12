@extends('admin.layouts.dash')

@section('title')
    <title>Check Overlap</title>
@stop

@section('intro')
                        <div class="navbar-nav align-items-lg-center ml-auto">
                            <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-bell navbar-icon align-middle"></i>
                                    <span class="badge badge-danger badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Notifications
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Login from 192.168.1.1</div>
                                                <div class="text-light small mt-1">
                                                    Aliquam ex eros, imperdiet vulputate hendrerit et.
                                                </div>
                                                <div class="text-light small mt-1">12h ago</div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-user-plus bg-info border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">You have
                                                    <strong>4</strong> new followers</div>
                                                <div class="text-light small mt-1">
                                                    Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Server restarted</div>
                                                <div class="text-light small mt-1">
                                                    19h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">99% server load</div>
                                                <div class="text-light small mt-1">
                                                    Etiam nec fringilla magna. Donec mi metus.
                                                </div>
                                                <div class="text-light small mt-1">
                                                    20h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                                </div>
                            </div>

                            <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-mail navbar-icon align-middle"></i>
                                    <span class="badge badge-success badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Messages</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Messages
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>
                                                <div class="text-light small mt-1">
                                                    Josephin Doe &nbsp;·&nbsp; 58m ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>
                                                <div class="text-light small mt-1">
                                                    Lary Doe &nbsp;·&nbsp; 1h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>
                                                <div class="text-light small mt-1">
                                                    Alice &nbsp;·&nbsp; 2h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
                                                <div class="text-light small mt-1">
                                                    Suzen &nbsp;·&nbsp; 5h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="{{url('thumbnail/'.Session::get('image'))}}" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{ Session::get('username') }}</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{url('profile')}}" class="dropdown-item">
                                        <i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-settings text-muted"></i> &nbsp; Account settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{url('logout')}}" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                                </div>
                            </div>
                        </div>
@stop


@section('sidebar')
    <ul class="sidenav-inner py-1">

    <!-- Dashboards -->
    <li class="sidenav-item">
        <a href="{{url('dashboard')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-home"></i>
            <div>Dashboard</div>
        </a>
    </li>

    <!-- Layouts -->
    <li class="sidenav-item">
        <a href="{{url('registration')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-file-text"></i>
            <div>Registration</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('teacher-student')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-file-text"></i>
            <div>Teacher-Student Details</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('course-detail')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-chalkboard-teacher"></i>
            <div>Course Details</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('enrollment')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-chalkboard-teacher"></i>
            <div>Enrollment</div>
        </a>
    </li>
    <li class="sidenav-item  active">
        <a href="{{url('pre-enrollment')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-chalkboard-teacher"></i>
            <div>Pre-Enrollment</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('session-section')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-list"></i>
            <div>Sessions & Sections</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('class-routine')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-calendar-alt"></i>
            <div>Class Routine</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('advisorship')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-archive"></i>
            <div>Advisorship</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('payments')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-credit-card"></i>
            <div>Payments</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('results')}}" class="sidenav-link">
            <i class="sidenav-icon 	fas fa-server"></i>
            <div>Results</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('exam-schedule')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-layer-group"></i>
            <div>Exam Scheduleing</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('notice-event')}}" class="sidenav-link">
            <i class="sidenav-icon 	fas fa-mail-bulk"></i>
            <div>Notices & Events</div>
        </a>
    </li>
    </ul>
@stop



@section('content')


    <div class="container mt-5">
        <div class="row">
                    @foreach($ans as $a )
                        @if($a[3])
                        <div class="col-lg-4">
                            <div class="card rounded shadow  mb-5 bg-white rounded">
                                <div class="card-header">
                                    <h5>{{ $a[0] }}</h5>
                                    <p>   {{ $a[1] }}  |  {{ $a[2] }}</p>
                                </div>
                                <div class="card-body">
                                    <h6>Total Overlap : {{$a[3]}} </h6>
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                @if($a[2] != 'First' ) <th> 1st </th> @endif
                                                @if($a[2] != 'Second' ) <th> 2nd </th> @endif
                                                @if($a[2] != 'Third' ) <th> 3rd </th> @endif
                                                @if($a[2] != 'Fourth' ) <th> 4th </th> @endif
                                                @if($a[2] != 'Fifth' ) <th> 5th </th> @endif
                                                @if($a[2] != 'Sixth' ) <th> 6th </th> @endif
                                                @if($a[2] != 'Seventh' ) <th> 7th </th> @endif
                                                @if($a[2] != 'Eighth' ) <th> 8th </th> @endif
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <tr>
                                            @if($a[2] != 'First' ) <td>{{ $res[$a[4]][1] }}</td>@endif
                                            @if($a[2] != 'Second' )<td>{{ $res[$a[4]][2] }}</td>@endif
                                            @if($a[2] != 'Third' ) <td>{{ $res[$a[4]][3] }}</td>@endif
                                            @if($a[2] != 'Fourth' ) <td>{{ $res[$a[4]][4] }}</td>@endif
                                            @if($a[2] != 'Fifth' ) <td>{{ $res[$a[4]][5] }}</td>@endif
                                            @if($a[2] != 'Sixth' ) <td>{{ $res[$a[4]][6] }}</td>@endif
                                            @if($a[2] != 'Seventh' ) <td>{{ $res[$a[4]][7] }}</td>@endif
                                            @if($a[2] != 'Eighth' ) <td>{{ $res[$a[4]][8] }}</td>@endif
                                            </tr>
                                        
                                        </tbody>

                                                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
        </div>
    </div>
   

   


@stop








