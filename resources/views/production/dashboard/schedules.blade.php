@extends('production.dashboard.main')
@section('title')
Schedules
@endsection

@section('main-section')


<div class="metrail-table-container schedulespagecontainer">
    <div class="schedulesbuttoncontainer">
        <a href="{{ url('createschedule') }}"class="addnewschedulesbtn">
            <img src="{{ asset('assets/images/dashboard/addnewemploy.svg') }}"  class="me-1"alt="">
            <button>Add New Schedule</button>
        </a>
        <a href="" class="runchedulescronbtn ms-2">
            <img src="{{ asset('assets/images/dashboard/schedulescron.svg') }}" class="me-1" alt="">
            <button>Run Schedule Cron</button>
        </a>
    </div>
    <div class="schedulestable">
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
                    <td>Monday - November 21</td>
                    <td class="text-center">3</td>
                    <td class="text-center schedules-live-input">
                        <div class="form-check form-switch ms-5 p-1">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                checked>

                        </div>
                    </td>
                    <td class="text-center"> 3</td>
                    <td class="text-center"> 3</td>
                    <td class="text-center">
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
                    <td>Monday - November 21</td>
                    <td class="text-center">3</td>
                    <td class="text-center schedules-live-input">
                        <div class="form-check form-switch ms-5 p-1">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                checked>

                        </div>
                    </td>
                    <td class="text-center"> 3</td>
                    <td class="text-center"> 3</td>
                    <td class="text-center">
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
                    <td>Monday - November 21</td>
                    <td class="text-center">3</td>
                    <td class="text-center schedules-live-input">
                        <div class="form-check form-switch ms-5 p-1">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">

                        </div>
                    </td>
                    <td class="text-center"> 3</td>
                    <td class="text-center"> 3</td>
                    <td class="text-center">
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
                    <td>Monday - November 21</td>
                    <td class="text-center">3</td>
                    <td class="text-center schedules-live-input">
                        <div class="form-check form-switch ms-5 p-1" >
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">

                        </div>
                    </td>
                    <td class="text-center"> 3</td>
                    <td class="text-center"> 3</td>
                    <td class="text-center">
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
                    <td>Monday - November 21</td>
                    <td class="text-center">3</td>
                    <td class="text-center schedules-live-input">
                        <div class="form-check form-switch ms-5 p-1">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckChecked">

                        </div>
                    </td>
                    <td class="text-center"> 3</td>
                    <td class="text-center"> 3</td>
                    <td class="text-center">
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
@endsection
