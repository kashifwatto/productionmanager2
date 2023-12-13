@extends('production.dashboard.main')
@section('title')
Metrails
@endsection

@section('main-section')
<div class="container-fluid ">
    <div id="main-content-outer">

    </div>
    <div class="row">

        @include('production.dashboard.metrailssidebar')
        <div class="col-10 main-content " id="main-content">
            <div id="overlay">

            </div>
            <div id="maincontentcontainer">
                <div id="metrailpagecontentcontainer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="month" id="showclederbtn">

                                <i class="uil uil-angle-left-b"></i>
                                <i class="uil uil-angle-right-b"></i>
                                <h3 id='currentmonthandyear'> </h3>


                            </div>
                            {{-- clender --}}
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
                        <div class="col-md-4 ">
                            <h1 class='landscapmarttext'>Landscape Mart</h1>
                        </div>
                        <div class="col-md-4 addnewvendercontainer">
                            <a class="addnewvender" id="addnewvandermodalbtnlink">
                                <img src="{{ asset('assets/images/dashboard/addnewvandericon.svg') }}" alt="">
                                <span>Add New Vendor</span>
                            </a>
                        </div>






                    </div>
                    <div class="row metrails-accordin-container mt-3">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item" data-bs-parent="#accordionPanelsStayOpenExample">
                                <div class="accordion-header" id="accordionPanelsStayOpenExample">
                                    <div class="row accordion-header-inner"  >
                                        <div class="row row2">
                                            <div class="col d-flex flex-row justify-content-between align-items-center">
                                                <div>

                                                    <img src="{{ asset('assets/images/dashboard/accordienlogo.svg') }}"
                                                        alt="">
                                                </div>
                                                <div class="createpurchaseorderbtn">
                                                    <a href="">
                                                        <span> Create Purchase Order</span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <div class="week-display mt-2">
                                                        <h3>Week of Nov 13-19</h3>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="selectallbtn">
                                                        <a href="">
                                                            <span>Select all</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="accordienheadermenu">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                                            <rect width="24" height="4" fill="#827D7D"/>
                                                            <rect y="6" width="24" height="4" fill="#827D7D"/>
                                                            <rect y="12" width="24" height="4" fill="#827D7D"/>
                                                          </svg>
                                                        <div class="menu-hide">
                                                            <ul>
                                                                <li class="setremindermodalbtnlink">Set
                                                                    Reminder</li>
                                                                <li class="editsupplierbtnlink">Edit Suppliers
                                                                </li>
                                                                <li>Tag Materials</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div  data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOneone" style="cursor: pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                                                </div>

                                            </div>



                                        </div>
                                    </div>

                                    {{-- <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">

                                    </button> --}}
                                </div>
                                <div id="panelsStayOpen-collapseOneone" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class='pobtn'>
                                                    <a href="">
                                                        <span>P0 : Jen Erator</span>
                                                    </a>
                                                </div>
                                                <div class='projectspans'>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>
                                                    <span>
                                                        100 pcs x Allan Block Caps (18) -
                                                        Natural
                                                    </span>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>
                                                    <span>
                                                        100 pcs x Allan Block Caps (18) -
                                                        Natural
                                                    </span>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class='pobtn'>
                                                    <a href="">
                                                        <span>P0 : Shawn Morgan</span>
                                                    </a>
                                                </div>
                                                <div class='projectspans'>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>
                                                    <span>
                                                        100 pcs x Allan Block Caps (18) -
                                                        Natural
                                                    </span>

                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-bs-parent="">
                                <div class="accordion-header" id="accordionPanelsStayOpenExame">
                                    <div class="row accordion-header-inner" data-bs-toggle="collapse"
                                        data-bs-target="#two">
                                        <div class="row row2">
                                            <div class="col d-flex flex-row justify-content-between align-items-center">
                                                <div>

                                                    <img src="{{ asset('assets/images/dashboard/accordienlogo.svg') }}"
                                                        alt="">
                                                </div>
                                                <div class="createpurchaseorderbtn">
                                                    <a href="">
                                                        <span> Create Purchase Order</span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <div class="week-display mt-2">
                                                        <h3>Week of Nov 13-19</h3>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="selectallbtn">
                                                        <a href="">
                                                            <span>Select all</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="accordienheadermenu">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                                            <rect width="24" height="4" fill="#827D7D"/>
                                                            <rect y="6" width="24" height="4" fill="#827D7D"/>
                                                            <rect y="12" width="24" height="4" fill="#827D7D"/>
                                                          </svg>
                                                        <div class="menu-hide">
                                                            <ul>
                                                                <li class="setremindermodalbtnlink">Set
                                                                    Reminder</li>
                                                                <li class="editsupplierbtnlink">Edit Suppliers
                                                                </li>
                                                                <li>Tag Materials</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>
                                    </div>

                                    {{-- <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">

                                    </button> --}}
                                </div>
                                <div id="two" class="accordion-collapse collapse "
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class='pobtn'>
                                                    <a href="">
                                                        <span>P0 : Jen Erator</span>
                                                    </a>
                                                </div>
                                                <div class='projectspans'>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>
                                                    <span>
                                                        100 pcs x Allan Block Caps (18) -
                                                        Natural
                                                    </span>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>
                                                    <span>
                                                        100 pcs x Allan Block Caps (18) -
                                                        Natural
                                                    </span>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class='pobtn'>
                                                    <a href="">
                                                        <span>P0 : Shawn Morgan</span>
                                                    </a>
                                                </div>
                                                <div class='projectspans'>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>
                                                    <span>
                                                        100 pcs x Allan Block Caps (18) -
                                                        Natural
                                                    </span>

                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-bs-parent="">
                                <div class="accordion-header" id="accordionPanelsStayOpenExame">
                                    <div class="row accordion-header-inner" data-bs-toggle="collapse"
                                        data-bs-target="#three">
                                        <div class="row row2">
                                            <div
                                                class="col d-flex flex-row justify-content-between align-items-center">
                                                <div>

                                                    <img src="{{ asset('assets/images/dashboard/accordienlogo.svg') }}"
                                                        alt="">
                                                </div>
                                                <div class="createpurchaseorderbtn">
                                                    <a href="">
                                                        <span> Create Purchase Order</span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <div class="week-display mt-2">
                                                        <h3>Week of Nov 13-19</h3>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="selectallbtn">
                                                        <a href="">
                                                            <span>Select all</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="accordienheadermenu">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                                            <rect width="24" height="4" fill="#827D7D"/>
                                                            <rect y="6" width="24" height="4" fill="#827D7D"/>
                                                            <rect y="12" width="24" height="4" fill="#827D7D"/>
                                                          </svg>
                                                        <div class="menu-hide">
                                                            <ul>
                                                                <li class="setremindermodalbtnlink">Set
                                                                    Reminder</li>
                                                                <li class="editsupplierbtnlink">Edit Suppliers
                                                                </li>
                                                                <li>Tag Materials</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>
                                    </div>

                                    {{-- <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">

                                    </button> --}}
                                </div>
                                <div id="three" class="accordion-collapse collapse " aria-labelledby="">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class='pobtn'>
                                                    <a href="">
                                                        <span>P0 : Jen Erator</span>
                                                    </a>
                                                </div>
                                                <div class='projectspans'>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>
                                                    <span>
                                                        100 pcs x Allan Block Caps (18) -
                                                        Natural
                                                    </span>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>
                                                    <span>
                                                        100 pcs x Allan Block Caps (18) -
                                                        Natural
                                                    </span>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class='pobtn'>
                                                    <a href="">
                                                        <span>P0 : Shawn Morgan</span>
                                                    </a>
                                                </div>
                                                <div class='projectspans'>
                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>
                                                    <span>
                                                        100 pcs x Allan Block Caps (18) -
                                                        Natural
                                                    </span>

                                                    <span>
                                                        23 yard x 2-6 River Rock
                                                    </span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="accordion-item" data-bs-parent="#accordionPanelsStayOpenExample">
                                <div class="accordion-header" id="headingtwo">
                                    <div class="row accordion-header-inner" data-bs-toggle="collapse"
                                        data-bs-target="#collapsetwo">
                                        <div class="row row2">
                                            <div
                                                class="col d-flex flex-row justify-content-between align-items-center">
                                                <div>

                                                    <img src="{{ asset('assets/images/dashboard/accordienlogo.svg') }}"
                                                        alt="">
                                                </div>
                                                <div class="createpurchaseorderbtn">
                                                    <a href="">
                                                        <span> Create Purchase Order</span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <div class="week-display mt-2">
                                                        <h3>Week of Nov 13-19</h3>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="selectallbtn">
                                                        <a href="">
                                                            <span>Select all</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="menu">
                                                        <i class="fa-solid fa-bars"></i>
                                                        <div class="menu-hide">
                                                            <ul>
                                                                <li class="setremindermodalbtnlink">Set
                                                                    Reminder</li>
                                                                <li class="editsupplierbtnlink">Edit Suppliers
                                                                </li>
                                                                <li>Tag Materials</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>
                                    </div>

                                    {{-- <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">

                                    </button> --}}
                        </div>
                        <div id="collapsetwo" class="accordion-collapse collapse "
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class='pobtn'>
                                            <a href="">
                                                <span>P0 : Jen Erator</span>
                                            </a>
                                        </div>
                                        <div class='projectspans'>
                                            <span>
                                                23 yard x 2-6 River Rock
                                            </span>
                                            <span>
                                                100 pcs x Allan Block Caps (18) -
                                                Natural
                                            </span>
                                            <span>
                                                23 yard x 2-6 River Rock
                                            </span>
                                            <span>
                                                100 pcs x Allan Block Caps (18) -
                                                Natural
                                            </span>
                                            <span>
                                                23 yard x 2-6 River Rock
                                            </span>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class='pobtn'>
                                            <a href="">
                                                <span>P0 : Shawn Morgan</span>
                                            </a>
                                        </div>
                                        <div class='projectspans'>
                                            <span>
                                                23 yard x 2-6 River Rock
                                            </span>
                                            <span>
                                                100 pcs x Allan Block Caps (18) -
                                                Natural
                                            </span>

                                            <span>
                                                23 yard x 2-6 River Rock
                                            </span>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}

                        {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well
                                        as the showing and hiding via CSS transitions. You can modify any of this
                                        with custom CSS or overriding our default variables. It's also worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>,
                                        though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well
                                        as the showing and hiding via CSS transitions. You can modify any of this
                                        with custom CSS or overriding our default variables. It's also worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>,
                                        though the transition does limit overflow.
                                    </div>
                                </div>
                            </div> --}}
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
@endsection