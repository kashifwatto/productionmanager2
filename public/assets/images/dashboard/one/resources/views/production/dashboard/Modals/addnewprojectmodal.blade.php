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
            <h5 class="mt-2 mx-5 date">Date: <span>OCT31 - NOV 31</span></h5>
        </span>
        

    </div>
   <div class="row form-row">
      
           <div class="col-md-6">
               <div class="input template-select">
                   <label>Connecting Existing Client</label>

                <select  class="templateselect" >
                    <option selected>select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
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

             <select  class="templateselect" >
                 <option selected>select</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                 <option value="3">Three</option>
               </select>
            </div>  
            <div class="input template-select">
                <label>FORMEN</label>

             <select  class="templateselect" >
                 <option selected>select</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                 <option value="3">Three</option>
               </select>
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
 <div class="modal-footer mt-3">
   <button type="button" class="btn btn-secondary mx-2 px-3 closebtnaddnewprojectmodal" >Close</button>
   <button type="button" class="btn btn-success btn-save mx-2 px-3">Save</button>
 </div>

   </div>
</div>