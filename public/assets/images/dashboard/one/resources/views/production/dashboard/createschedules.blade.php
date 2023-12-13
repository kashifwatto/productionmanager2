<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Create Schedules</title>
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
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard/createschedules.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard/clender.css') }}">
<style>
    dl, ol, ul {
    margin-top: 0;
    margin-bottom: 0rem !important;
}
ol, ul {
    padding-left: 0rem !important;
}
    
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.wrapper{
  width: 360px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}
.wrapper header{
  display: flex;
  align-items: center;
  padding: 25px 10px 10px;
  justify-content: space-between;
}
header .icons{
  display: flex;
}
header .icons span{
  height: 38px;
  width: 38px;
  margin: 0 1px;
  cursor: pointer;
  color: #878787;
  text-align: center;
  line-height: 38px;
  font-size: 1.9rem;
  user-select: none;
  border-radius: 50%;
}
.icons span:last-child{
  margin-right: -10px;
}
header .icons span:hover{
  background: #f2f2f2;
}
header .current-date{
  font-size: 1.45rem;
  font-weight: 500;
}
.calendar{
  padding: 20px;
}
.calendar ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  text-align: center;
}
.calendar .days{
  margin-bottom: 20px;
display: flex;
justify-content: center;
align-items: center;
margin-right: -30px;
    margin-top: -30px;
}

.calendar li{
  color: #333;
  width: calc(100% / 7);
  font-size: 1.07rem;
}
.calendar .weeks li{
  font-weight: 500;
  cursor: default;
}
.calendar .days li{
  z-index: 1;
  cursor: pointer;
  position: relative;
  margin-top: 30px;
}
.days li.inactive{
  color: #aaa;
}
.days li.active{
  color: #fff;
}
.days li::before{
  position: absolute;
  content: "";
  left: 50%;
  top: 50%;
  height: 40px;
  width: 40px;
  z-index: -1;
  border-radius: 4px;
  transform: translate(-90%, -50%);
}
.days li.active::before{
  background: #6AB716;
}
.days li:not(.active):hover::before{
  background: #f2f2f2;
}
</style>

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
<div class="create-schdules-container">
  <div class="create-schdules-container-top-btn-container">
    <a href=""class="metrail-pricing-btn1" >
      <img src="{{asset('assets/images/dashboard/addnewemploy.svg')}}" alt="">
      <button>Add New Schedule</button>
    </a>

  </div>
  <div class="row create-schdules-container-2nd-row">
    <div class="col-md-4"><h3>1 Teams Added</h3></div>
    <div class="col-md-4 create-schdules-container-2nd-row-part2 text-center">
      <h1 class="text-center">Create Schedule</h1>
      <a>
        <h6>Monday , November 13, 2023</h6>
        
        <img src="{{asset('assets/images/dashboard/Vector.svg')}}" alt="">
      </a>



      {{-- clender code --}}
      <div class="wrapper">
        <header class='clender-header'>
            <div class="icons">
                <span id="prev" class="material-symbols-rounded"></span>
                <p class="current-date"></p>
            <span id="next" class="material-symbols-rounded"></span>
          </div>
        </header>
        <div class="calendar">
            <ul class="weeks">             
            <li>Sun</li>
            <li>Mon</li>
            <li>Tue</li>
            <li>Wed</li>
            <li>Thu</li>
            <li>Fri</li>
            <li>Sat</li>
          </ul>
          <hr class="mt-3">
          <ul class="days"></ul>
        </div>
      </div>
      
  </div>
    <div class="col-md-4">
        <div class="text-center schedules-live-input" >
            <div class="form-check form-switch ms-5">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            </div>
            <div>

                <label class="d-block">Live on App?</label>
            </div>
        </div>
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
{{-- <script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/modals.js') }}"></script> --}}
<script src="{{ asset('assets/js/clender.js') }}"></script>


</html>