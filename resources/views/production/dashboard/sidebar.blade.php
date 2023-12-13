<div class="col-2 sidebar " id="sidebar-content" >
  <div id="sidebar">
      <div class="side-bar-menu">
          <a class="sidebar-link" id="sidebarlink">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11" fill="none">
                <line y1="1.5" x2="14" y2="1.5" stroke="white" stroke-width="3"/>
                <line y1="5.5" x2="14" y2="5.5" stroke="white" stroke-width="3"/>
                <line y1="9.5" x2="14" y2="9.5" stroke="white" stroke-width="3"/>
              </svg>
              {{-- <img src="./sidebar-menu.svg" alt=""> --}}
              <span>Project Menu</span>
          </a>
      </div>
  </div>
 
  <div class=" sidebar-popup display-none ms-2" id="sidebarpopup">
  

      <div class="top ">
          <div class="sidebar-logo">
              <a href="">
                  <span class="ms-4">Production Manager</span>
                  
                  <img src="{{asset('assets/images/dashboard/header-logo.svg')}}" class="mx-1" alt="">
              </a>

          </div>
          <div class="sidebar-menu">
              <ul class="">
                  <li id="clientAddbtn">
                      <a   id='addclintbtn' >
                           
                          <img src="{{asset('assets/images/dashboard/man-green.svg')}}" class="ms-3 me-2"  alt="">
                          <span>Add Client</span>
                         
                          <img src="{{asset('assets/images/dashboard/plus-gray.svg')}}"class="mx-2" alt="">
                      </a>
                  </li>
                  <li id="createestimatebtn">
                      <a id="addestimatemodalbtn" >
                         
                          <img src="{{asset('assets/images/dashboard/estimate-green.svg')}}"class="ms-3 me-2" alt="" >
                          <span>Create Estimate</span>
                          <img src="{{asset('assets/images/dashboard/plus-gray.svg')}}" class="mx-2" alt="">

                      </a>
                  </li>
                  <li id="addnewproject">
                      <a id="addnewprojectbtnlink" >
                          <img src="{{asset('assets/images/dashboard/cube-icon.svg')}}" class="ms-3 me-2" alt="">

                          <span>Add New Project</span>
                          <img src="{{asset('assets/images/dashboard/plus-gray.svg')}}" class="mx-2" alt="">

                      </a>
                  </li>
              </ul>
          </div>

      </div>
      <div class="bottom">
          <div class="sidebar-hr">
              <hr >
          </div>
          <div class="links">
              <a   id="estimatetemplatelinkbtn" ><span class="ps-3">Estimate template</span></a>
              <a href="{{url('losdups')}}" ><span class="ps-3">Load Ups</span></a>
              <a href="{{url('metrailpricing')}}"> <span class="ps-3"> Material pricing</span></a>
          </div>
      </div>

  </div>
 
  
</div>
