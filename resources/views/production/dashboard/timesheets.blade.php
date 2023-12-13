@extends('production.dashboard.main')
@section('title')
    TimeSheets
@endsection

@section('main-section')
    <div class="container-fluid timesheetpagecontainer mb-4 ">

        <div class="row">
            <div class="col-2 timesheetsidebar">
                <div class='allemployeesname'>
                    <div>
                        <a href="" class="active">Cody Faulkner</a>
                    </div>
                    <div>
                        <a href="">Cody Faulkner</a>
                    </div>
                    <div>
                        <a href="">Cody Faulkner</a>
                    </div>
                    <div>
                        <a href="">Cody Faulkner</a>
                    </div>
                    <div>
                        <a href="">Cody Faulkner</a>
                    </div>
                    <div>
                        <a href="">Cody Faulkner</a>
                    </div>
                    <div>
                        <a href="">Cody Faulkner</a>
                    </div>
                    <div>
                        <a href="">Cody Faulkner</a>
                    </div>
                    <div>
                        <a href="">Cody Faulkner</a>
                    </div>
                    <div>
                        <a href="">Cody Faulkner</a>
                    </div>
                </div>
            </div>
            <div class="col-10 timesheetcontent">
                <div class="header">
                    <div class="row">
                        <div class="col-md-3 ">
                            <h1 class="clientname">Cody Faulkner</h1>
                            <h3 class="timesheets">Time Sheets</h3>

                            <div  class="daterangeoutercontainer">


                            <h6 class="date">DATE: </h6>
                            <input class="customdaterangepickerinput mb-2 mx-1" readonly placeholder="NOV 12-DEC 15" id="kt_daterangepicker_1" />
                        </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h3 class="checkdehours">Clocked Hours</h3>
                            <h1 class="checkedhourscounter">0:00</h1>
                        </div>
                        <div class="col-md-3 text-center">
                            <h3 class="ot">OT</h3>
                            <h1 class="otcounter">0:00</h1>
                        </div>
                        <div class="col-md-3 justify-content-end text-center">
                            <h3 class="break">Break</h3>
                            <h1 class="breakcounter">0:00</h1>
                        </div>
                    </div>
                </div>
                <div class="timesheettabblecontainer px-5 py-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Day</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Total</th>
                                <th scope="col">OT</th>
                                <th scope="col">Break</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>11.29.2023</td>
                                <td>8:20</td>
                                <td>10:30</td>
                                <td>1:00</td>
                                <td>2:00</td>
                                <td>0:00</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
@endsection
