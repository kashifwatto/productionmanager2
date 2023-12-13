@extends('production.dashboard.main')
@section('title')
Employees
@endsection

@section('main-section')
<div class="employee-overlay">
    
</div>

<div class="emloyess-table-container mb-4">
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
@endsection