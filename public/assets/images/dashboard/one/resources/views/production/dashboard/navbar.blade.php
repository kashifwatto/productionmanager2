
<div class="container-fluid">
  <div class="top-header">
      <header class="d-flex flex-row justify-content-between align-items-center">
          <div class="header-logo">
              <a href="">
                  <img src="{{asset('assets/images/dashboard/header-logo.svg')}}" alt="">
                  <span>Production Manager</span>
              </a>
          </div>
          <div class="header-menu">
              <ul class="">
                  <li>
                      <a href="{{url('dashboard')}}" id="navbaractive-btn">
                          <img src="{{asset('assets/images/dashboard/cube-icon.svg')}}" alt="">
                          <span>Projects</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{url('employees')}}" >
                          <img src="{{asset('assets/images/dashboard/man-icon.svg')}}" alt="" >
                          <span>Employees</span>
                      </a>
                  </li>
                  <li>
                      <a href="">
                          <img src="{{asset('assets/images/dashboard/sechdual-icon.svg')}}" alt="">
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