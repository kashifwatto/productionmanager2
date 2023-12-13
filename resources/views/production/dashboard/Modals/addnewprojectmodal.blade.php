<div class="modal-container" id="addnewprojectmodal">
    <div class="modal-body">
<div class="modal-top">
   <span class="text-end closebtnaddnewprojectmodal" > &times;</span>
   <h3>Add New Project</h3>
</div>

<div class="newproject-modal-form-container">
    <div class="row">
        <span class="add-project-modal-add-client-option">
            <a class="add-project-modal-add-client-option" id="addclintbtnestimatemodal">
                <img src="{{ asset('assets/images/dashboard/plusicon.svg') }}" class="mx-2 " alt="">
                <h5 class="mt-2">Create New Client</h5>
            </a>
            <h5 class="mt-2 mx-5 date">Date: <input class="customdaterangepickerinput mb-2 mx-1"    readonly placeholder="NOV 12-DEC 15" id="kt_daterangepicker_1" />
            </h5>
        </span>


    </div>
   <div class="row form-row">

           <div class="col-md-6">
               <div class="input template-select">
                   <label>Connecting Existing Client</label>

                   <div class="custom-select">
                    <div class="selected-option">select</div>
                    <div class="dropdown-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                        <path d="M1 1.5L6 6.5L11 1.5" stroke="#585858" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg></div>
                    <ul class="options">
                      <li value="1">One</li>
                      <li value="2">Two</li>
                      <li value="3">Three</li>
                    </ul>
                  </div>
               </div>
               <div class="input">
                <label>DESCRIPTION:</label>
                <input type="text" placeholder="Enter your description">
               </div>
               <div class="input">
                <label>WORK ORDER LINK:</label>
                <input type="url" placeholder="Enter your work order link">
               </div>
               <div class="input">
                <label>LOAD UP TAGS:</label>
                <input type="text" placeholder="">
               </div>


           </div>
           <div class="col-md-6">
            <div class="input template-select">
                <label>connect Estimate</label>

                <div class="custom-select">
                    <div class="selected-option">select</div>
                    <div class="dropdown-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                        <path d="M1 1.5L6 6.5L11 1.5" stroke="#585858" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg></div>
                    <ul class="options">
                      <li value="1">One</li>
                      <li value="2">Two</li>
                      <li value="3">Three</li>
                    </ul>
                  </div>
            </div>
            <div class="input template-select">
                <label>FORMEN</label>

                <div class="custom-select">
                    <div class="selected-option">select</div>
                    <div class="dropdown-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none">
                        <path d="M1 1.5L6 6.5L11 1.5" stroke="#585858" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg></div>
                    <ul class="options">
                      <li value="1">One</li>
                      <li value="2">Two</li>
                      <li value="3">Three</li>
                    </ul>
                  </div>
            </div>
            <div class="input">
                <label>PROJECT VIDEO LINK:</label>
                <input type="url" placeholder="Enter your project video link">
               </div>
               <div class="input">
                <label>ADDITIONAL LOADS UP TAGS:</label>
                <input type="text" placeholder="">
               </div>
           </div>



   </div>
 </div>
 <div class="modal-footer mt-3 ">
   <button type="button" class="btn btn-secondary mx-2 px-3  closebtnaddnewprojectmodal" >Close</button>
   <button type="button" class="btn btn-success btn-save mx-2 px-3">Save</button>
 </div>

   </div>
</div>
