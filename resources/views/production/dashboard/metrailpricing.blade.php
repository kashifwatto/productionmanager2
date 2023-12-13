@extends('production.dashboard.main')
@section('title')
Metrail Pricing
@endsection

@section('main-section')
<div class="metrailpricingoverlay"></div>
<div class="metrail-table-container">
    <div class="metrailpagebuttoncontainer">
        <a class="metrail-pricing-btn1" id='addnewmetrailmodalbtnlink'>
            <img src="{{ asset('assets/images/dashboard/addnew-metrail-icon.svg') }}" alt="">
            <button>Add New Material</button>
        </a>
        <a href="" class="metrail-pricing-btn2">
            <img src="{{ asset('assets/images/dashboard/importmetrailicon.svg') }}" alt="">
            <button>Import Material </button>
        </a>
    </div>
    <div class="metailpage-table">
        <div class="mytable">
            <table id="mytable">
                <tr>
                    <th class="th-border">Name</th>
                    <th class="th-border">Price</th>
                    <th class="th-border">Unit</th>
                    <th class="th-border">Supplier</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Seam tape (per foot)</td>
                    <td>$100</td>
                    <td>Yard</td>
                    <td>Landscape Mart</td>
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
                    <td>$100</td>
                    <td>Yard</td>
                    <td>Landscape Mart</td>
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
                    <td>$100</td>
                    <td>Yard</td>
                    <td>Landscape Mart</td>
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
                    <td>$100</td>
                    <td>Yard</td>
                    <td>Landscape Mart</td>
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
