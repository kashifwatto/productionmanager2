<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/images/dashboard/header-logo.svg')}}" rel="icon">


  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


  <link rel="stylesheet" href="{{ asset('assets/css/dashboard/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard/indexstyle.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard/searchbox.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard/modals.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard/employees.css') }}">


</head>

<body>
 
  <div class="body">
    <div class="nav-barcontainer">

     
<div class="container-fluid">
  <div class="top-header">
      <header class="d-flex flex-row justify-content-between align-items-center">
          <div class="header-logo">
              <a id="addclintbtn">
                  <img src="{{asset('assets/images/dashboard/header-logo.svg')}}" alt="">
                  <span>Production Manager</span>
              </a>
          </div>
          <div class="header-menu">
              <ul class="">
                  <li>
                      <a href="{{url('dashboard')}}">
                          <img src="{{asset('assets/images/dashboard/cube-dark.svg')}}" alt="">
                          <span>Projects</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{url('employees')}}" id="">
                          <img src="{{asset('assets/images/dashboard/man-icon.svg')}}" alt="" >
                          <span>Employees</span>
                      </a>
                  </li>
                  <li>
                      <a href="" id="navbaractive-btn">
                          <img src="{{asset('assets/images/dashboard/schedules-green-icon.svg')}}" alt="">
                          <span>Schedules</span>
                      </a>

                  </li>
              </ul>
          </div>
          <div></div>
          <div class="header-setting">
              <img src="{{asset('assets/images/dashboard/setting-icon.svg')}}" alt="">
          </div>
      </header>
  </div>
</div>
<div class="metrail-table-container">
  <div >
    <a href="{{url('createschedule')}}"class="metrail-pricing-btn1" >
      <img src="{{asset('assets/images/dashboard/addnewemploy.svg')}}" alt="">
      <button>Add New Schedule</button>
    </a>
    <a href="" class="schedule-btn2 metrail-pricing-btn2 ">
      <img src="{{asset('assets/images/dashboard/schedulescron.svg')}}" alt="">
      <button>Run Schedule Cron</button>
    </a>
  </div>
  <div class="employess-table">
    <div class="mytable">
        <table id="mytable">
            <tr>
                <th class="th-border">Date</th>
                <th class="th-border">Team</th>
                <th class="th-border">Live?</th>
                <th class="th-border">Trucks Out</th>
                <th class="th-border">Trailers Out</th>
                <th>Action</th>
            </tr>
              <tr>
                <td>Monday  - November 21</td>
                <td class="text-center">3</td>
                <td class="text-center schedules-live-input" >
                    <div class="form-check form-switch ms-5">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>

                      </div>
                </td>
                <td class="text-center"> 3</td>
                <td class="text-center"> 3</td>
                <td class="text-center">
                    <div class="actions-button">
                        <a href="" onclick="alert('edit employ button')" class="mx-2"><img src="{{asset('assets/images/dashboard/employ-edit-icon.svg')}}" alt=""></a>
                        <a href="" onclick="alert('delete employ button')"><img src="{{asset('assets/images/dashboard/employ-delete-icon.svg')}}" alt=""></a>

                    </div>
                </td>
            </tr>
              <tr>
                <td>Monday  - November 21</td>
                <td class="text-center">3</td>
                <td class="text-center schedules-live-input" >
                    <div class="form-check form-switch ms-5">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>

                      </div>
                </td>
                <td class="text-center"> 3</td>
                <td class="text-center"> 3</td>
                <td class="text-center">
                    <div class="actions-button">
                        <a href="" onclick="alert('edit employ button')" class="mx-2"><img src="{{asset('assets/images/dashboard/employ-edit-icon.svg')}}" alt=""></a>
                        <a href="" onclick="alert('delete employ button')"><img src="{{asset('assets/images/dashboard/employ-delete-icon.svg')}}" alt=""></a>

                    </div>
                </td>
            </tr>
              <tr>
                <td>Monday  - November 21</td>
                <td class="text-center">3</td>
                <td class="text-center schedules-live-input" >
                    <div class="form-check form-switch ms-5">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" >

                      </div>
                </td>
                <td class="text-center"> 3</td>
                <td class="text-center"> 3</td>
                <td class="text-center">
                    <div class="actions-button">
                        <a href="" onclick="alert('edit employ button')" class="mx-2"><img src="{{asset('assets/images/dashboard/employ-edit-icon.svg')}}" alt=""></a>
                        <a href="" onclick="alert('delete employ button')"><img src="{{asset('assets/images/dashboard/employ-delete-icon.svg')}}" alt=""></a>

                    </div>
                </td>
            </tr>
              <tr>
                <td>Monday  - November 21</td>
                <td class="text-center">3</td>
                <td class="text-center schedules-live-input" >
                    <div class="form-check form-switch ms-5">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" >

                      </div>
                </td>
                <td class="text-center"> 3</td>
                <td class="text-center"> 3</td>
                <td class="text-center">
                    <div class="actions-button">
                        <a href="" onclick="alert('edit employ button')" class="mx-2"><img src="{{asset('assets/images/dashboard/employ-edit-icon.svg')}}" alt=""></a>
                        <a href="" onclick="alert('delete employ button')"><img src="{{asset('assets/images/dashboard/employ-delete-icon.svg')}}" alt=""></a>

                    </div>
                </td>
            </tr>
              <tr>
                <td>Monday  - November 21</td>
                <td class="text-center">3</td>
                <td class="text-center schedules-live-input" >
                    <div class="form-check form-switch ms-5">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" >

                      </div>
                </td>
                <td class="text-center"> 3</td>
                <td class="text-center"> 3</td>
                <td class="text-center">
                    <div class="actions-button">
                        <a href="" onclick="alert('edit employ button')" class="mx-2"><img src="{{asset('assets/images/dashboard/employ-edit-icon.svg')}}" alt=""></a>
                        <a href="" onclick="alert('delete employ button')"><img src="{{asset('assets/images/dashboard/employ-delete-icon.svg')}}" alt=""></a>

                    </div>
                </td>
            </tr>
              <tr>
                <td>Monday  - November 21</td>
                <td class="text-center">3</td>
                <td class="text-center schedules-live-input" >
                    <div class="form-check form-switch ms-5">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>

                      </div>
                </td>
                <td class="text-center"> 3</td>
                <td class="text-center"> 3</td>
                <td class="text-center">
                    <div class="actions-button">
                        <a href="" onclick="alert('edit employ button')" class="mx-2"><img src="{{asset('assets/images/dashboard/employ-edit-icon.svg')}}" alt=""></a>
                        <a href="" onclick="alert('delete employ button')"><img src="{{asset('assets/images/dashboard/employ-delete-icon.svg')}}" alt=""></a>

                    </div>
                </td>
            </tr>





             


        </table>
    </div>



  </div>
</div>
    </div>
    


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script>
 












</script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/modals.js') }}"></script>


</html>