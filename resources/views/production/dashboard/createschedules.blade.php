@extends('production.dashboard.main')
@section('title')
Create Schedules
@endsection

@section('main-section')
<div class="createschedulesoverlay">

</div>
<div class="create-schdules-container" id='createsschdulescontainer'>
    <div class="create-schdules-container-top-btn-container">
        <a href="{{ url('schedules') }}"class="metrail-pricing-btn1">
            {{-- <img src="{{ asset('assets/images/dashboard/addnewemploy.svg') }}" alt=""> --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" viewBox="0 0 9 14" fill="none">
                <path d="M8.4 1.4175L6.98688 0L0 7L6.98688 14L8.4 12.5825L2.83062 7L8.4 1.4175Z" fill="white"/>
              </svg>
            <button>Back to Schedule</button>
        </a>

    </div>
    <div class="row create-schdules-container-2nd-row">
        <div class="col-md-4">
            <h3>1 Teams Added</h3>
        </div>
        <div class="col-md-4 create-schdules-container-2nd-row-part2 text-center">
            <h1 class="text-center">Create Schedule</h1>
            <a id="showclederbtn">
                <h6 id='currentformateddate'></h6>

                <img src="{{ asset('assets/images/dashboard/Vector.svg') }}" alt="">
            </a>



            {{-- clender code --}}
            <div class="wrapper" id="celenderwrapper">
                <header class='clender-header'>
                    <div class="icons">
                        <span id="prev">
                            <img src="{{ asset('assets/images/dashboard/celenderleftarrow.svg') }}"
                                alt="">
                        </span>
                        <div class="clender-header-p">

                            <p class="current-date"></p>
                        </div>
                        <span id="next">
                            <img src="{{ asset('assets/images/dashboard/celenderrightArrow.svg') }}"
                                alt="">
                        </span>
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
                    <hr class="mb-4">
                    <ul class="days"></ul>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="text-center schedules-live-input">
                <div class="form-check form-switch ms-5">
                    <input class="form-check-input" type="checkbox" role="switch"
                        id="flexSwitchCheckChecked" checked>
                </div>
                <div>

                    <label class="d-block">Live on App?</label>
                </div>
            </div>
        </div>
    </div>

    <div class="create-scddules-container-3rd-row">
        <div class="row  create-scddules-container-3rd-row-1 ">
            <div class="col-md-5">
                <div class="row">
                    <div class="col addteamselectprojectselect selectedprojectshowbtn">
                        <h6 id='selectedprojectshow'>Jen Erator</h6>
                    </div>
                    <div class="col addteamselectemployeeselect">
                        <div class=" template-select">

                            <div class="addteamselectemploywrapper">
                                <div class=" addteamselectemployeebtn">
                                    <span>Select Employee</span>
                                    <i class="uil uil-angle-down"></i>
                                </div>
                                <div class="addteamselecttemplatecontent">
                                    <div class=" addteamselectemployeesearch">
                                        <i class="uil uil-search mx-2"></i>
                                        <input spellcheck="false" type="text">
                                    </div>
                                    <ul
                                        class="select-division-select-template-options addteamselectemployeeoption">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-3 addteamselecttimeselect">
                        <input type="time" placeholder="8:30">

                    </div>
                    <div class="col-md-3 addteamselectlocationselect">
                        <input type="" placeholder="Site">

                    </div>
                    <div class="col-md-3 addteamselecttruckselect ">
                        <div class="input template-select">


                            <div class="addteamselecttruckwrapper">
                                <div class="addteamselecttrucktemplatebtn">
                                    <span>Truck</span>
                                    <i class="uil uil-angle-down"></i>
                                </div>
                                <div class="addteamselecttrucktemplatecontent">
                                    <div class="addteamselecttrucktemplatesearch">
                                        <i class="uil uil-search mx-2"></i>
                                        <input spellcheck="false" type="text">
                                    </div>
                                    <ul class="addteamselecttrucktemplateoptions"></ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 addteamselecttrailerselect">
                        <div class="input template-select">


                            <div class="addteamselecttrailerwrapper">
                                <div class="addteamselecttrailertemplatebtn">
                                    <span>Trailer</span>
                                    <i class="uil uil-angle-down"></i>
                                </div>
                                <div class="addtesmselecttrailertemplatecontent">
                                    <div class="addteamselecttrailertemplatesearch">
                                        <i class="uil uil-search mx-2"></i>
                                        <input spellcheck="false" type="text">
                                    </div>
                                    <ul class="addteamselecttrailertemplateoptions"></ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row  create-scddules-container-3rd-row-1 row-2 mt-2">
            <div class="col-md-5">
                <div class="row">
                    <div class="col d-flex justify-content-end align-items-center ">
                        <img src="{{ asset('assets/images/dashboard/addemployeeicon.svg') }}"
                            style='' alt="">
                    </div>
                    <div class="col addteamselectemployeeselect">
                        <div class=" template-select">

                            <div class=" addteamselectemploywrapper">
                                <div class=" addteamselectemployeebtn">
                                    <span>Select Employee</span>
                                    <i class="uil uil-angle-down"></i>
                                </div>
                                <div class="addteamselecttemplatecontent">
                                    <div class=" addteamselectemployeesearch">
                                        <i class="uil uil-search mx-2"></i>
                                        <input spellcheck="false" type="text">
                                    </div>
                                    <ul
                                        class="select-division-select-template-options addteamselectemployeeoption">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-3 addteamselecttimeselect">
                        <input type="text" placeholder="8:30">

                    </div>
                    <div class="col-md-3 addteamselectlocationselect">
                        <input type="text" placeholder="Site">

                    </div>
                    <div class="col-md-3 addteamselecttruckselect ">

                    </div>

                    <div class="col-md-3 addteamselecttrailerselect">

                    </div>

                </div>
            </div>
        </div>
        <div class="row  create-scddules-container-3rd-row-1 row-2 mt-2">
            <div class="col-md-5">
                <div class="row">
                    <div class="col d-flex justify-content-end align-items-center ">
                        <img src="{{ asset('assets/images/dashboard/addemployeeicon.svg') }}"
                            style='' alt="">
                    </div>
                    <div class="col addteamselectemployeeselect">
                        <div class=" template-select">

                            <div class=" addteamselectemploywrapper">
                                <div class=" addteamselectemployeebtn">
                                    <span>Select Employee</span>
                                    <i class="uil uil-angle-down"></i>
                                </div>
                                <div class="addteamselecttemplatecontent">
                                    <div class=" addteamselectemployeesearch">
                                        <i class="uil uil-search mx-2"></i>
                                        <input spellcheck="false" type="text">
                                    </div>
                                    <ul
                                        class="select-division-select-template-options addteamselectemployeeoption">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-3 addteamselecttimeselect">
                        <input type="text" placeholder="8:30">

                    </div>
                    <div class="col-md-3 addteamselectlocationselect">
                        <input type="text" placeholder="Site">

                    </div>
                    <div class="col-md-3 addteamselecttruckselect ">

                    </div>

                    <div class="col-md-3 addteamselecttrailerselect">

                    </div>

                </div>
            </div>
        </div>
        <div class="row  create-scddules-container-3rd-row-1 row-2 mt-2">
            <div class="col-md-5">
                <div class="row">
                    <div class="col d-flex justify-content-end align-items-center ">
                        <img src="{{ asset('assets/images/dashboard/addemployeeicon.svg') }}"
                            style='' alt="">
                    </div>
                    <div class="col addteamselectemployeeselect">
                        <div class=" template-select">

                            <div class=" addteamselectemploywrapper">
                                <div class=" addteamselectemployeebtn">
                                    <span>Select Employee</span>
                                    <i class="uil uil-angle-down"></i>
                                </div>
                                <div class="addteamselecttemplatecontent">
                                    <div class=" addteamselectemployeesearch">
                                        <i class="uil uil-search mx-2"></i>
                                        <input spellcheck="false" type="text">
                                    </div>
                                    <ul
                                        class="select-division-select-template-options addteamselectemployeeoption">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-3 addteamselecttimeselect">
                        <input type="text" placeholder="8:30">

                    </div>
                    <div class="col-md-3 addteamselectlocationselect">
                        <input type="text" placeholder="Site">

                    </div>
                    <div class="col-md-3 addteamselecttruckselect ">

                    </div>

                    <div class="col-md-3 addteamselecttrailerselect">

                    </div>

                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col d-flex justify-content-end align-items-center addteamdeletebtncontainer">

                <a href=""><span>Delete Team</span><img
                        src="{{ asset('assets/images/dashboard/deletewhite.svg') }}" alt=""></a>
            </div>
        </div>


    </div>
    <div class="row addnewteambtn row-4">
        <div class="col d-flex justify-content-center align-items-center my-4">
            <a href=""> <img src="{{ asset('assets/images/dashboard/addnewteambtn.svg') }}"
                    alt=""></a>
        </div>
    </div>

    <div class="row row-5 px-5">
        <div class="col d-flex justify-content-end align-items-center mb-3  addteamsavedatabtn">

            <a href=""><span>Save</span></a>
        </div>
    </div>
</div>


@endsection

