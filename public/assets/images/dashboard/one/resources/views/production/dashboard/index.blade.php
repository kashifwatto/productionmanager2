

@extends('production.dashboard.main')
@section('main-section')
<div id="main-content-outer">

</div>
<div class="row">

    @include('production.dashboard.sidebar')
    <div class="col-10 main-content " id="main-content">
        <div class="overlay ">

        </div>
        <div id="maincontentcontainer">
          {{-- index page data --}}
 <div class="month" id="indexmonth">

  <i class="uil uil-angle-left-b"></i>
  <i class="uil uil-angle-right-b"></i>
  <h3>October 2023</h3>
   </div>
   <div class="row card-container " id="card-container">
    <div class="col card-1">
      <div class="part-1">
        <h1>Projects</h1>
        <h2>22</h2>
      </div>
      <div class="part-2">
        <img src="{{asset('assets/images/dashboard/card-cube.svg')}}" alt="">
      </div>
    </div>
    <div class="col card-1"><div class="part-1">
      <h1>Employees</h1>
      <h2>51</h2>
    </div>
    <div class="part-2">
      <img src="{{asset('assets/images/dashboard/card-man.svg')}}" alt="">
    </div></div>
    <div class="col card-1"><div class="part-1">
      <h1>Clients</h1>
      <h2>16</h2>
    </div>
    <div class="part-2">
      <img src="{{asset('assets/images/dashboard/card-client.svg')}}" alt="">
    </div></div>
   </div>
   <div class="clender-table row">
    <table>
      
      <tr>
        <th>MON</th>
        <th>TUE</th>
        <th>WED</th>
        <th>THU</th>
        <th>FRI</th>
      </tr>
      <tr>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td class="active-date">9</td>
        <td>10</td>
      </tr>
    </table>
   </div>
   <div class="row hr">
    <hr>
   </div>
  {{-- project part --}}
  <div class="project-part">
    <h1>No Projects Scheduled Yet</h1> 
  
  
  </div>
  {{-- add client modal --}}
  
  
    
  </div>
        </div>
    </div>
</div>
    {{-- popups  --}}
    @include('production.dashboard.Modals.createestimate')
    @include('production.dashboard.Modals.addclient')
    @include('production.dashboard.Modals.estimatetemplate')
    @include('production.dashboard.Modals.addnewprojectmodal')
    @include('production.dashboard.Modals.emptyclientdetails')
    @include('production.dashboard.Modals.priviousestimatemodal')

@endsection