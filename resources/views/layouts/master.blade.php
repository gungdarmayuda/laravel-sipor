<!DOCTYPE html>
<html lang="en">
{{-- Halaman Utama --}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SIPOR TK DHARMAPATNI</title>
    <link rel="shortcut icon" href="{{ URL::to('assets/img/logo.png') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/css/bootstrap-datetimepicker.min.cs') }}s">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/simple-calendar/simple-calendar.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/css/style.css') }}">
	{{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('assets2/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets2/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets2/js/toastr.min.js') }}"></script>

    {{-- trix --}}
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets2/css/trix.css') }}">
    <script type="text/javascript" src="{{ URL::to('assets2/js/trix.js') }}"></script>
    <style>
      trix-toolbar [data-trix-button-group="file-tools"],trix-toolbar [data-trix-attribute='quote'],trix-toolbar [data-trix-attribute='code']{
        display:none;
      }
      trix-toolbar [data-trix-button-group="quote"]{
        display:none;
      }
        trix-editor ul { list-style-type: disc !important; margin-left: 1rem !important; }
        trix-editor ol { list-style-type: decimal !important; margin-left: 1rem !important; }

    </style>

</head>
<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ URL::to('assets/img/logo.png') }}" alt="Logo">
                    SIPOR
                </a>
                
                <a href="{{ route('home') }}" class="logo logo-small">
                    <img src="{{ URL::to('assets/img/logo.png') }}" alt="Logo" width="30" height="30">
                </a>
                
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
                @if (Session::get('role_name') === 'Orang Tua Murid')
                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="/student-photos/{{ Session::get('avatar') }}" width="31"alt="{{ Session::get('name') }}">
                            <div class="user-text">
                                <h6>{{ Session::get('name') }}</h6>
                                <p class="text-muted mb-0">{{ Session::get('role_name') }}</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="/student-photos/{{ Session::get('avatar') }}" alt="{{ Session::get('name') }}" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{ Session::get('name') }}</h6>
                                <p class="text-muted mb-0">{{ Session::get('role_name') }}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </li>


                @else
                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="/student-photos/{{ Session::get('avatar') }}" width="31"alt="{{ Session::get('name') }}">
                            <div class="user-text">
                                <h6>{{ Session::get('name') }}</h6>
                                <p class="text-muted mb-0">{{ Session::get('role_name') }}</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="/student-photos/{{ Session::get('avatar') }}" alt="{{ Session::get('name') }}" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{ Session::get('name') }}</h6>
                                <p class="text-muted mb-0">{{ Session::get('role_name') }}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('user/profile/page') }}">My Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </li>
                @endif

                
            </ul>
        </div>
		{{-- side bar --}}
		@include('sidebar.sidebar')
		{{-- content page --}}
        @yield('content')
        <footer>
            <small>Copyright © 2022 TK Dharmapatni Denpasar</small>
        </footer>
    
    </div>

    <script src="{{ URL::to('assets2/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets2/js/feather.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/simple-calendar/jquery.simple-calendar.js') }}"></script>
    <script src="{{ URL::to('assets2/js/calander.js') }}"></script>
    <script src="{{ URL::to('assets2/js/circle-progress.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ URL::to('assets2/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::to('assets2/js/script.js') }}"></script>
    @yield('script')
</body>
</html>