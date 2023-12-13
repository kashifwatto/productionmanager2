<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="navbaractiveclass" content="@yield('navbaractiveclass', 'navbaractive-btn')">

    <!-- Favicons -->
    <link href="{{ asset('assets/images/dashboard/header-logo.svg') }}" rel="icon">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"
/>


    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/modals.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/timesheetstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/addemployeeselect.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/clender.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/createscheduleaddteamselect.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/createschedules.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/employees.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/fleetandtrailerstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/indexstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/loadupstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/metrailpage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/metrailpricing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/searchbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/templateselectbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/daterangepicker.css') }}">




</head>

<body style="padding-bottom:50px; background-color:#F7F8FA;">

    <div class="body">
        {{--  --}}
        <div class="bodyoverlay">

        </div>
        <div class="nav-barcontainer" style="overflow:hidden;">

            @include('production.dashboard.navbar')
        </div>
        <div class="container-fluid " style="padding:0px ;">
            @yield('main-section')

        </div>
    </div>
    {{-- popups  --}}
    @include('production.dashboard.Modals.createestimate')
    @include('production.dashboard.Modals.addclient')
    @include('production.dashboard.Modals.estimatetemplate')
    @include('production.dashboard.Modals.addnewprojectmodal')
    @include('production.dashboard.Modals.emptyclientdetails')
    @include('production.dashboard.Modals.priviousestimatemodal')
    @include('production.dashboard.Modals.newestimatetemplate')
    @include('production.dashboard.Modals.fillestimatemodal')
    @include('production.dashboard.Modals.addnewemployeemodal')
    @include('production.dashboard.Modals.addnewvandermodal')
    @include('production.dashboard.Modals.editsuppliermodal')
    @include('production.dashboard.Modals.setremaindermodal')
    @include('production.dashboard.Modals.addnewtruckmodal')
    @include('production.dashboard.Modals.addnewtrailermodal')
    @include('production.dashboard.Modals.selectproject')
    @include('production.dashboard.Modals.addnewprojectmodal')
    @include('production.dashboard.Modals.addnewmetrialmodals')
    @include('production.dashboard.Modals.addnewloadupmodal')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/clender.js') }}"></script>
    <script src="{{ asset('assets/js/createscheduleteamselect.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/employees.js') }}"></script>
    <script src="{{ asset('assets/js/fleetandtrailer.js') }}"></script>
    <script src="{{ asset('assets/js/metrailpage.js') }}"></script>
    <script src="{{ asset('assets/js/metrailpricing.js') }}"></script>
    <script src="{{ asset('assets/js/selecttemplate.js') }}"></script>
    <script src="{{ asset('assets/js/modals.js') }}"></script>
    <script src="{{ asset('assets/js/addemployeeselect.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>

</body>


</html>
