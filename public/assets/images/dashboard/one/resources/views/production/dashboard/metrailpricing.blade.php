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
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/metrailpricing.css') }}">


</head>

<body>

    <div class="body">
        <div class="nav-barcontainer">


            <div class="container-fluid">
                <div class="top-header">
                    <header class="d-flex flex-row justify-content-between align-items-center">
                        <div class="header-logo">
                            <a href="">
                                <img src="{{ asset('assets/images/dashboard/header-logo.svg') }}" alt="">
                                <span>Production Manager</span>
                            </a>
                        </div>
                        <div class="header-menu">
                            <ul class="">
                                <li>
                                    <a href="{{ url('dashboard') }}">
                                        <img src="{{ asset('assets/images/dashboard/cube-dark.svg') }}" alt="">
                                        <span>Projects</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('employees') }}" id="">
                                        <img src="{{ asset('assets/images/dashboard/man-icon.svg') }}" alt="">
                                        <span>Employees</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/images/dashboard/sechdual-icon.svg') }}"
                                            alt="">
                                        <span>Schedules</span>
                                    </a>

                                </li>
                            </ul>
                        </div>
                        <div></div>
                        <div class="header-setting">
                            <img src="{{ asset('assets/images/dashboard/setting-icon.svg') }}" alt="">
                        </div>
                    </header>
                </div>
            </div>
            <div class="metrail-table-container">
                <div>
                    <a class="metrail-pricing-btn1" id='addnewmetrailmodalbtnlink'>
                        <img src="{{ asset('assets/images/dashboard/addnew-metrail-icon.svg') }}" alt="">
                        <button>Add New Material</button>
                    </a>
                    <a href="" class="metrail-pricing-btn2">
                        <img src="{{ asset('assets/images/dashboard/importmetrailicon.svg') }}" alt="">
                        <button>Import Material </button>
                    </a>
                </div>
                <div class="employess-table">
                    <div class="mytable">
                        <table id="mytable">
                            <tr>
                                <th class="th-border">Name</th>
                                <th class="th-border">Price</th>
                                <th class="th-border">Unit</th>
                                <th class="th-border">Supplier</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>Seam tape (per foot)</td>
                                <td>$100</td>
                                <td>Yard</td>
                                <td>Landscape Mart</td>
                                <td>
                                    <div class="actions-button">
                                        <a href="" onclick="alert('edit employ button')" class="mx-2"><img
                                                src="{{ asset('assets/images/dashboard/employ-edit-icon.svg') }}"
                                                alt=""></a>
                                        <a href="" onclick="alert('delete employ button')"><img
                                                src="{{ asset('assets/images/dashboard/employ-delete-icon.svg') }}"
                                                alt=""></a>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Seam tape (per foot)</td>
                                <td>$100</td>
                                <td>Yard</td>
                                <td>Landscape Mart</td>
                                <td>
                                    <div class="actions-button">
                                        <a href="" onclick="alert('edit employ button')" class="mx-2"><img
                                                src="{{ asset('assets/images/dashboard/employ-edit-icon.svg') }}"
                                                alt=""></a>
                                        <a href="" onclick="alert('delete employ button')"><img
                                                src="{{ asset('assets/images/dashboard/employ-delete-icon.svg') }}"
                                                alt=""></a>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Seam tape (per foot)</td>
                                <td>$100</td>
                                <td>Yard</td>
                                <td>Landscape Mart</td>
                                <td>
                                    <div class="actions-button">
                                        <a href="" onclick="alert('edit employ button')" class="mx-2"><img
                                                src="{{ asset('assets/images/dashboard/employ-edit-icon.svg') }}"
                                                alt=""></a>
                                        <a href="" onclick="alert('delete employ button')"><img
                                                src="{{ asset('assets/images/dashboard/employ-delete-icon.svg') }}"
                                                alt=""></a>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Seam tape (per foot)</td>
                                <td>$100</td>
                                <td>Yard</td>
                                <td>Landscape Mart</td>
                                <td>
                                    <div class="actions-button">
                                        <a href="" onclick="alert('edit employ button')" class="mx-2"><img
                                                src="{{ asset('assets/images/dashboard/employ-edit-icon.svg') }}"
                                                alt=""></a>
                                        <a href="" onclick="alert('delete employ button')"><img
                                                src="{{ asset('assets/images/dashboard/employ-delete-icon.svg') }}"
                                                alt=""></a>

                                    </div>
                                </td>
                            </tr>






                        </table>
                    </div>



                </div>
            </div>
        </div>
        {{-- add new metrial popup modals --}}
        <div class="modal-container" id="showaddnewmetrialmodal">
            <div class="modal-body">
                <div class="modal-top">
                    <span class="text-end closeaddnewmetrialmodal"> &times;</span>
                    <h3>Add New Material</h3>
                    <div class="form-container">
                        <div class="row">
    
                            <div class="col-md-6">
                                <label>Item Name:</label>
                                <input type="text" placeholder="Seam tape (per foot)">
                                <label>Price:</label>
                                <input type="text" placeholder="$152">
    
                            </div>
                            <div class="col-md-6 ">
                                <label>Unit:</label>
                                <input type="text" placeholder="Yard">
                                <label>Supplier:</label>
                                <div >
                                    <select class="form-select" id="addnewmetrailselectbox" aria-label="Default select example">
                                        <option selected>Select Supplier</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                </div>

                            </div>
    
    
                        </div>
                    </div>
    
                </div>
                <div class="modal-footer mt-3">
                    <button type="button" class="btn btn-secondary mx-2 px-3 closeaddnewmetrialmodal">Close</button>
                    <button type="button" class="btn btn-success btn-save mx-2 px-3">Save</button>
                </div>

            </div>
        </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script></script>

<script src="{{ asset('assets/js/metrailpricing.js') }}"></script>


</html>
