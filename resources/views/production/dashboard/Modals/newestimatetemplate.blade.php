<div class="modal-container " id="newestimatetemplatemodal" >
    <div class="modal-body emptyclientdetails">
        <div>
            <div class="modal-top">
                <span class="text-end closenewestimatetemplatemodal"> &times;</span>
                <div class="cleintname">
                    <h1>Savannah Nguyen</h1>
                    <h4>SavannahNguyen@example.com</h4>
                </div>
                {{-- <a id="priviousestimatebtnlink" class="priviousestimatelink">Previous Estimates</a> --}}
            </div>
            <div class="client-details mt-3">
                <div class="row">
                    <div class="col-md-10 ">
                        <div class="row">
                            <div class="col d-flex justify-content-start align-items-center">
                                <div class=" d-flex justify-content-start">
                                    <a class="add-client-option display-template-select">
                                        <img src="{{ asset('assets/images/dashboard/plusicon.svg') }}" class="mx-2"
                                            alt="">
                                        <h5>Add New</h5>
                                    </a>
                                </div>
                                <div class="">
                                    <div class="hide-part">

                                        <button class="ms-2">New</button>
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
                    </div>
                    <div class="col-md-2 projectwonbtn ">
                        <div class="row">
                            <div class="form-check form-switch projectwonbtn ">
                                <div>

                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckChecked">
                                </div>


                            </div>
                            <div class="text-end">

                                <h6>Project won</h6>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="estimation-entries-table ">
                    <div class="row optionaltitlecontainer">
                        <div class="col-md-6">
                            <label for="">Work Heading(Optional)</label>
                            <input type="text" placeholder="Enter work tittle here">
                        </div>

                    </div>
                    <div class="row inputtablecontainer px-3 mt-2">
                        <table class="table" id="estimattioninputtable">
                            <thead>
                                <tr>
                                    <th>Inputs</th>
                                    <th>Quantity</th>
                                    <th>Price Per Unit</th>
                                    <th>Unit</th>
                                    <th>Total Price</th>
                                    <th>Actuals Quantity</th>
                                    <th>Actuals</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td >
                                        <div class="tdformselectouter">


                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select </option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>

                                          </select>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="11" height="8" viewBox="0 0 11 8" fill="none">
                                            <path d="M5.24631 4.15468L8.8718 0.529238L10.5667 2.28301L5.33496 7.5L0 2.16512L1.65052 0.5L5.24631 4.15468Z" fill="#585858"/>
                                          </svg>
                                        </div>
                                    </td>
                                    <td><input type="text" ></td>
                                    <td><input type="text" ></td>
                                    <td><input type="text" ></td>
                                    <td><input type="text" ></td>
                                    <td><input type="text" ></td>
                                    <td><input type="text" ></td>
                                    {{-- <td><input type="text"></td> --}}
                                </tr>


                            </tbody>
                        </table>

                        <div class=" text-center" id='addnewrowbtn'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.25 3.75V6.25H7.03125V10H4.21875V6.25H0V3.75H4.21875V0H7.03125V3.75H11.25Z"
                                    fill="#008001" />
                            </svg>
                        </div>
                    </div>
                    <div class="row totletablecontainer inputtablecontainer px-2">
                        <table class="table px-2">
                            <thead>
                                <tr>
                                    <th>Total Line Item cost</th>
                                    <th></th>
                                    <th></th>
                                    <th>$394</th>
                                    <th></th>
                                    <th></th>
                                    <th>$0</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>

                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Difference</td>
                                    <td>$394</td>

                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="row footerdescription px-5">
                <label for="">DESCRIPTION</label>
                <textarea placeholder="Enter description" class="px-2"></textarea>
            </div>
        </div>
        <div class="row newestimatehr mt-2 px-5">
            <hr>
        </div>


        <div class="modal-footer mb-3 ">
            <button type="button" class="btn btn-secondary mx-2 px-3 deleteestimatebtn">Delete</button>
            <button type="button" class="btn btn-secondary mx-2 px-3 sendestimatetocleintbtn">Send to Client</button>
            <button type="button" class="btn btn-success btn-save mx-2 px-3 savenewestamatebtn">Save</button>
        </div>
    </div>


</div>
