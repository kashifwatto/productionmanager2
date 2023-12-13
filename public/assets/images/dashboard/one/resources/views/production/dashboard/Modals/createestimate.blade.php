<div class="modal-container " id="createestimatemodal">
    <div class="modal-body estimatemodal">
      <div>
        <div class="modal-top">
          <span class="text-end closecreateestimatemodal"> &times;</span>
          <h3>CONNECT EXISTING CLIENTS</h3>
      </div>
      <div class="form-container-creat-estimate mt-5">

        <div class="wrapper">
            <div class="select-btn">
                <span>Select Client</span>
                <i class="uil uil-angle-down"></i>
            </div>
            <div class="content">
                <div class="search">
                    <i class="uil uil-search mx-2"></i>
                    <input spellcheck="false" type="text">
                </div>
                <ul class="options"></ul>
            </div>
        </div>
    </div>
    <div class="row add-client-option-row" id="add-client-option-row">
      <div class="col-md-6">  

      </div>
      <div class="col-md-6 ">
          <div class="col-auto">
              <a class="add-client-option " id="addclintbtnestimatemodal">
                  <img src="{{ asset('assets/images/dashboard/plusicon.svg') }}" class="mx-2" alt="">
                  <h5>Create New Client</h5>
              </a>
          </div>

      </div>



  </div>
      </div>
       

        
        <div class="modal-footer mt-3">
            <button type="button" class="btn btn-secondary mx-2 px-3 closecreateestimatemodal">Close</button>
            <button type="button" id="openlinkemptyclientdetailsmodal" class="btn btn-success btn-save mx-2 px-3">Save</button>
        </div>
    </div>
   

</div>
