<div class="modal-container" id="showaddnewemploymodal">
 <div class="modal-body">
     <div class="modal-top">
         <span class="text-end closebtnaddnewemployeemodal"> &times;</span>
         <h3>Add New Employee</h3>
     </div>

     <div class="newproject-modal-form-container">
         <div class="row form-row">
             <div class="col-md-6">
                 <div class="input">
                     <label>FIRST NAME:</label>

                     <input type="text" placeholder="Enter your FIRST NAME">

                 </div>

                 <div class="input">
                     <label>Email:</label>
                     <input type="email" placeholder="Enter your Email">
                 </div>



             </div>
             <div class="col-md-6">
                 <div class="input">
                     <label>LAST NAME:</label>
                     <input type="text" placeholder="Enter your LAST NAME:">
                 </div>
                 <div class="input template-select">
                     <label>division</label>

                     <div class="addemploymodaldivisionwrapper">
                         <div class="select-division-select-template-btn">
                             <span>Select Division</span>
                             <i class="uil uil-angle-down"></i>
                         </div>
                         <div class="select-division-select-template-content">
                             <div class="select-division-select-template-search">
                                 <i class="uil uil-search mx-2"></i>
                                 <input spellcheck="false" type="text">
                             </div>
                             <ul class="select-division-select-template-options"></ul>
                         </div>
                     </div>
                 </div>

             </div>



         </div>

     </div>
     <div class="newproject-modal-form-container">
         <div class="row form-row">
             <label class="my-4">default setting:</label>
             <div class="col-md-6">


                 <div class="">

                     <div class="row">
                         <div class="col-md-6">
                             <div class="input template-select">


                                 <div class="addemployselecttruckwrapper">
                                     <div class="addemployselecttrucktemplatebtn">
                                         <span>Select Truck</span>
                                         <i class="uil uil-angle-down"></i>
                                     </div>
                                     <div class="addemployselecttrucktemplatecontent">
                                         <div class="addemployselecttrucktemplatesearch">
                                             <i class="uil uil-search mx-2"></i>
                                             <input spellcheck="false" type="text">
                                         </div>
                                         <ul class="addemployselecttrucktemplateoptions"></ul>
                                     </div>
                                 </div>
                             </div>
                             <div class="input mt-2 ">

                                 <input type="text" class="pb-1" placeholder="Start Time">
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="input template-select">


                                 <div class="addemployselecttruckwrapper"
                                     id='addemployeeselecttrailerwrapper'>
                                     <div class="addemployselecttrucktemplatebtn"
                                         id="addemployeeselecttrailerbtn">
                                         <span>Select Trailer</span>
                                         <i class="uil uil-angle-down"></i>
                                     </div>
                                     <div class="addemployselecttrucktemplatecontent"
                                         id='addemployeeselecttrailercontent'>
                                         <div class="addemployselecttrucktemplatesearch"
                                             id='addemployeeselecttrailersearch'>
                                             <i class="uil uil-search mx-2"></i>
                                             <input spellcheck="false" type="text">
                                         </div>
                                         <ul class="addemployselecttrucktemplateoptions"
                                             id='addemployeeselecttraileroptions'></ul>
                                     </div>
                                 </div>
                             </div>
                             <div class="input mt-2">

                                 <input type="text" class="pb-1" placeholder="Place">
                             </div>
                         </div>

                     </div>
                 </div>




             </div>
             <div class="col-md-6">

                 <div class="input template-select">


                     <div class="addemploymodaldivisionwrapper" id='addemployselecttemplatewrapper'>
                         <div class="select-division-select-template-btn"
                             id='addemployeeselecttemplatebtn'>
                             <span>Select Teammate</span>
                             <i class="uil uil-angle-down"></i>
                         </div>
                         <div class="select-division-select-template-content"
                             id='addemployeeselecttemplatecontent'>
                             <div class="select-division-select-template-search"
                                 id=addemployeeselecttemplatesearch>
                                 <i class="uil uil-search mx-2"></i>
                                 <input spellcheck="false" type="text">
                             </div>
                             <ul class="select-division-select-template-options"
                                 id='addemployeeselecttemplateoptions'></ul>
                         </div>
                     </div>
                 </div>
                 <div class="color-select">
                     <input type="color" name="color-select" id="colorPicker">
                     <label for="colorPicker">Select Color:</label>


                 </div>

             </div>



         </div>

     </div>
     <div class="modal-footer mt-3">
         <button type="button"
             class="btn btn-secondary mx-2 px-3 closebtnaddnewemployeemodal">Close</button>
         <button type="button" class="btn btn-success btn-save mx-2 px-3">Save</button>
     </div>



 </div>
</div>
