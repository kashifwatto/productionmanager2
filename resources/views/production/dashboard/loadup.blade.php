@extends('production.dashboard.main')
@section('title')
Load Up
@endsection

@section('main-section')
<div class="loaduppageoverlay">
    
</div>
<div class="metrail-table-container">

    <div class="d-flex flex-row ">
        <a class="loaduppagebtn1 me-3" id='addnewloadupbtnlink'>
            <img src="{{ asset('assets/images/dashboard/addnew-metrail-icon.svg') }}" class="me-2"
                alt="">
            <button>Add New Load Up</button>
        </a>
        <a href="{{ url('dashboard') }}" class="loaduppagebtn2">
            <img src="{{ asset('assets/images/dashboard/backtohomeicon.svg') }}" class="me-2"
                alt="">
            <button>Back To Home</button>
        </a>
    </div>
    <div class="employess-table">
        <div class="mytable">
            <table id="mytable">
                <tr>
                    <th class="th-border">Load Up Type</th>
                    {{-- <th class="th-border">Price</th>
                    <th class="th-border">Unit</th>
                    <th class="th-border">Supplier</th> --}}
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Seam tape (per foot)</td>
                    {{-- <td>$100</td>
                    <td>Yard</td>
                    <td>Landscape Mart</td> --}}
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
                    {{-- <td>$100</td>
                    <td>Yard</td>
                    <td>Landscape Mart</td> --}}
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
                    {{-- <td>$100</td>
                    <td>Yard</td>
                    <td>Landscape Mart</td> --}}
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
                    {{-- <td>$100</td>
                    <td>Yard</td>
                    <td>Landscape Mart</td> --}}
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
                    {{-- <td>$100</td>
                    <td>Yard</td>
                    <td>Landscape Mart</td> --}}
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

@endsection