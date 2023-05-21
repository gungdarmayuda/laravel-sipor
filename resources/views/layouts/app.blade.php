
<!DOCTYPE html>
<html lang="en">
{{-- Halaman Login --}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SIPOR TK DHARMAPATNI</title>
    <link rel="shortcut icon" href="{{ URL::to('assets/img/logo.png') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets2/css/style.css') }}">
    {{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('assets2/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets2/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets2/js/toastr.min.js') }}"></script>
</head>

<body>
    <style>    
        .invalid-feedback{
            font-size: 14px;
        }
    </style>

    <div class="main-wrapper login-body">    
        <div class="login-wrapper">
            <div class="container">
                
                <div class="loginbox justify-content-center">
                    <div class="login-left">
                        <img class="img-fluid rounded" src="{{ URL::to('assets/img/murid-2.png') }}" height="100%" alt="Logo">
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::to('assets2/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets2/js/feather.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::to('assets2/js/script.js') }}"></script>
</body>

</html>
