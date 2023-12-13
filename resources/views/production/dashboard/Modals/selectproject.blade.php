<div class="modal-container " id="selectprojectmodal">
    <div class="modal-body estimatemodal">
      <div>
        <div class="modal-top">
          <span class="text-end closeselectprojectmodal"> &times;</span>
          <h3>Select Project</h3>
      </div>
      <div class="form-container-select-project">

             <h1>projects</h1>
        <div class="addteamselectprojectwrapper">
            <div class="addteamselectprojectbtn">
                <span>Select Client</span>
                <i class="uil uil-angle-down"></i>
            </div>
            <div class="addteamselectprojectcontent">
                <div class="addteamselectprojectsearch">
                    <i class="uil uil-search mx-2"></i>
                    <input spellcheck="false" type="text">
                </div>
                <ul class="addteamselectprojectoptions"></ul>
            </div>
        </div>
    </div>
    <div class="row add-client-option-row" id="add-client-option-row">
      <div class="col-md-6">

      </div>
      <div class="col-md-6 ">
          <div class="col-auto pe-5">
              <a class="add-client-option pe-2" id="addnewprojectmodalshowbtn">
                  <img src="{{ asset('assets/images/dashboard/plusicon.svg') }}" class="mx-2" alt="">
                  <h5>Create New Project</h5>
              </a>
          </div>

      </div>



  </div>
      </div>



        <div class="modal-footer mt-3">
            <button type="button" class="btn btn-secondary mx-2 px-3 closeselectprojectmodal">Close</button>
            <button type="button" id="openlinkemptyclientdetailsmodal" class="btn btn-success btn-save mx-2 px-3">Save</button>
        </div>
    </div>


</div>
