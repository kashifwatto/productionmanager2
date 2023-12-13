<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/images/dashboard/header-logo.svg') }}" rel="icon">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/indexstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/searchbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/modals.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/employees.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/templateselectbox.css') }}">


</head>

<body>

    <div class="body">
        <div class="nav-barcontainer">

            @include('production.dashboard.navbar')
        </div>
        <div class="container-fluid ">
            @yield('main-section');

        </div>
    </div>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/modals.js') }}"></script>
<script src="{{ asset('assets/js/selecttemplate.js') }}"></script>


</html>
