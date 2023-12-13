<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Employees</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/addemployeeselect.css') }}">


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
                                    <a href="{{ url('employees') }}" id="navbaractive-btn">
                                        <img src="{{ asset('assets/images/dashboard/employ-green.svg') }}"
                                            alt="">
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
            <div class="emloyess-table-container">
                <div class="add-employ-btn">
                    <a id="showaddnewemploymodalbtn">
                        <img src="{{ asset('assets/images/dashboard/add-employ-icon.svg') }}" alt="">
                        <button>Add New Employee</button>
                    </a>
                </div>
                <div class="employess-table">
                    <div class="mytable">
                        <table id="mytable">
                            <tr>
                                <th class="th-border">Name</th>
                                <th class="th-border">Divison</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>Will Cole</td>
                                <td>Hardscape</td>
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
                                <td>Will Cole</td>
                                <td>Hardscape</td>
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
                                <td>Will Cole</td>
                                <td>Hardscape</td>
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
                                <td>Will Cole</td>
                                <td>Hardscape</td>
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

        {{-- add new employ modal --}}
        <div class="modal-container" id="showaddnewemploymodal">
            <div class="modal-body">
                <div class="modal-top">
                    <span class="text-end closebtnaddnewemployeemodal"> &times;</span>
                    <h3>Add New Employee</h3>
                </div>

                <div class="newproject-modal-form-container">
                    <div class="row form-row">
                        <div class="col-md-6">
                            <div class="input">
                                <label>FIRST NAME:</label>

                                <input type="text" placeholder="Enter your FIRST NAME">

                            </div>

                            <div class="input">
                                <label>Email:</label>
                                <input type="email" placeholder="Enter your Email">
                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="input">
                                <label>LAST NAME:</label>
                                <input type="text" placeholder="Enter your LAST NAME:">
                            </div>
                            <div class="input template-select">
                                <label>division</label>

                                <div class="addemploymodaldivisionwrapper">
                                    <div class="select-division-select-template-btn">
                                        <span>Select Division</span>
                                        <i class="uil uil-angle-down"></i>
                                    </div>
                                    <div class="select-division-select-template-content">
                                        <div class="select-division-select-template-search">
                                            <i class="uil uil-search mx-2"></i>
                                            <input spellcheck="false" type="text">
                                        </div>
                                        <ul class="select-division-select-template-options"></ul>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>
                <div class="newproject-modal-form-container">
                    <div class="row form-row">
                        <label class="my-4">default setting:</label>
                        <div class="col-md-6">


                            <div class="">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input template-select">


                                            <div class="addemployselecttruckwrapper">
                                                <div class="addemployselecttrucktemplatebtn">
                                                    <span>Select Truck</span>
                                                    <i class="uil uil-angle-down"></i>
                                                </div>
                                                <div class="addemployselecttrucktemplatecontent">
                                                    <div class="addemployselecttrucktemplatesearch">
                                                        <i class="uil uil-search mx-2"></i>
                                                        <input spellcheck="false" type="text">
                                                    </div>
                                                    <ul class="addemployselecttrucktemplateoptions"></ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input mt-2 ">

                                            <input type="text" class="pb-1" placeholder="Start Time">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input template-select">


                                            <div class="addemployselecttruckwrapper"
                                                id='addemployeeselecttrailerwrapper'>
                                                <div class="addemployselecttrucktemplatebtn"
                                                    id="addemployeeselecttrailerbtn">
                                                    <span>Select Trailer</span>
                                                    <i class="uil uil-angle-down"></i>
                                                </div>
                                                <div class="addemployselecttrucktemplatecontent"
                                                    id='addemployeeselecttrailercontent'>
                                                    <div class="addemployselecttrucktemplatesearch"
                                                        id='addemployeeselecttrailersearch'>
                                                        <i class="uil uil-search mx-2"></i>
                                                        <input spellcheck="false" type="text">
                                                    </div>
                                                    <ul class="addemployselecttrucktemplateoptions"
                                                        id='addemployeeselecttraileroptions'></ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input mt-2">

                                            <input type="text" class="pb-1" placeholder="Place">
                                        </div>
                                    </div>

                                </div>
                            </div>




                        </div>
                        <div class="col-md-6">

                            <div class="input template-select">


                                <div class="addemploymodaldivisionwrapper" id='addemployselecttemplatewrapper'>
                                    <div class="select-division-select-template-btn"
                                        id='addemployeeselecttemplatebtn'>
                                        <span>Select Division</span>
                                        <i class="uil uil-angle-down"></i>
                                    </div>
                                    <div class="select-division-select-template-content"
                                        id='addemployeeselecttemplatecontent'>
                                        <div class="select-division-select-template-search"
                                            id=addemployeeselecttemplatesearch>
                                            <i class="uil uil-search mx-2"></i>
                                            <input spellcheck="false" type="text">
                                        </div>
                                        <ul class="select-division-select-template-options"
                                            id='addemployeeselecttemplateoptions'></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="color-select">
                                <input type="color" name="color-select" id="colorPicker">
                                <label for="colorPicker">Select Color:</label>


                            </div>

                        </div>



                    </div>

                </div>
                <div class="modal-footer mt-3">
                    <button type="button"
                        class="btn btn-secondary mx-2 px-3 closebtnaddnewemployeemodal">Close</button>
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

<script src="{{ asset('assets/js/employees.js') }}"></script>
<script src="{{ asset('assets/js/addemployeeselect.js') }}"></script>


</html>
