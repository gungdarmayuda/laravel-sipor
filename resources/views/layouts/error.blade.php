<!DOCTYPE html>
<html lang="en">

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
</head>

<body class="error-page">

    {{-- content error --}}
    @yield('content')

    <script src="{{ URL::to('assets2/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets2/js/feather.min.js') }}"></script>
    <script src="{{ URL::to('assets2/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::to('assets2/js/script.js') }}"></script>
</body>

</html>
