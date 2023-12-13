<div class="modal-container " id="emptycleitndetailmodal">
    <div class="modal-body emptyclientdetails">
        <div>
            <div class="modal-top">
                <span class="text-end closemptyclientdetailsmodal"> &times;</span>
                <h3>Client Details</h3>
                <a id="priviousestimatebtnlink" class="priviousestimatelink">Previous Estimates</a>
            </div>
            <div class="client-details mt-3">

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Savannah Nguyen</h1>
                                <h4>SavannahNguyen@example.com</h4>
                            </div>
                            <div class="col-md-6">
                                <a class="add-client-option display-template-select" >
                                    <img src="{{ asset('assets/images/dashboard/plusicon.svg') }}" class="mx-2"
                                        alt="">
                                    <h5>Add New</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="hide-part">

                                <button>New</button>
                                <div class="select-box-container">
                                    <div class="select-template-wraper">
                                        <div class="select-template-btn">
                                            <span> Available Templets</span>
                                            <i class="uil uil-angle-down"></i>
                                        </div>
                                        <div class="select-template-content">
                                            <div class="select-template-search">
                                                <i class="uil uil-search mx-2"></i>
                                                <input spellcheck="false" type="text">
                                            </div>
                                            <ul class="select-template-options"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="client-project-table mt-3">

                      <div class="row">
                        <div class="col-md-4">
                            <h3 >Line Items</h3>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-center">Status</h3>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-end">Price</h3>
                        </div>

                      </div>
                </div>
            </div>

            <div class=" row total-amount"><h3 class="text-end">Total:  $0.00</h3></div>
        </div>


        <div class="modal-footer mt-3">
            <button type="button" class="btn btn-secondary mx-2 px-3 closemptyclientdetailsmodal">Close</button>
            <button type="button" class="btn btn-success btn-save mx-2 px-3">Save</button>
        </div>
    </div>


</div>
