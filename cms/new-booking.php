<?php include("header.php");?>
<div class="page-wrap property-add">
        <div class="page-title border-0">
            <div class="row gy-3 align-items-center">
                <div class="col align-self-end">
                    <h1 class="h2 mb-0">New Booking</h1>
                </div>
                <div class="col-auto">
                    <a href="manage-properties.php" class="btn rounded-pill btn-secondary-light">
                        <i class="icon-list me-2"></i>
                        All Bookings
                    </a>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="page-content">
                <div class="nav-tab mb-4">
                    <ul class="nav">
                        <li>
                            <a href="#" class="nav-link active">BY LOCATION</a>
                        </li>
                        <li>
                            <a href="new-booking-by-property.php" class="nav-link">BY PROPERTY</a>
                        </li>
                    </ul>
                </div>


                <div class="links-box mb-4">
                    <div class="row g-2 g-md-3">
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="location" id="lr1">
                                <label for="lr1">
                                    <h3>Mussoorie</h3>
                                </label>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="location" id="lr2">
                                <label for="lr2">
                                    <h3>Nainital Hills</h3>
                                </label>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="location" id="lr3">
                                <label for="lr3">
                                    <h3>Kasauli Hills</h3>
                                </label>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="location" id="lr4">
                                <label for="lr4">
                                    <h3>Goa</h3>
                                </label>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="location" id="lr5">
                                <label for="lr5">
                                    <h3>Tarudhan Valley</h3>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="search-location-properties">
                    <div class="row gy-3 gx-2 gx-md-3">
                        <div class="col-6 col-lg-3">
                            <div class="form-group mb-0">
                                <label for="">Check-In Date <sup class="text-danger">*</sup></label>
                                <div class="form-cl">
                                    <input type="text" class="form-control form-cl" placeholder="04 March, 2024" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="form-group mb-0">
                                <label for="">Check-Out Date <sup class="text-danger">*</sup></label>
                                <div class="form-cl">
                                    <input type="text" class="form-control" placeholder="04 March, 2024" />
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="row gx-2 gy-3 g-md-3">
                                <div class="col-6 col-lg">
                                    <div class="form-group mb-0">
                                        <label for="">No. of Adults <sup class="text-danger">*</sup></label>
                                        <select name="" id="" class="form-control form-select">
                                            <option value="Please Select" selected disabled>Please Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-lg">
                                    <div class="form-group mb-0">
                                        <label for="">No. of Children <sup class="text-danger">*</sup></label>
                                        <select name="" id="" class="form-control form-select">
                                            <option value="Please Select" selected disabled>Please Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-auto align-self-end">
                                    <button class="btn w-100 btn-primary fw-bold">SEARCH</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="links-box my-4 pt-4 border-top border-secondary-2">
                    <div class="row g-2 g-md-3">
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="properties" id="pr1">
                                <label for="pr1">
                                    <h3>Bliss Cottage</h3>
                                    <p><strong>Rs. 74,000</strong> Rs. 37,000/night</p>
                                </label>
                            </div>
                        </div>   
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="properties" id="pr2">
                                <label for="pr2">
                                    <h3>Oak Lodge</h3>
                                    <p><strong>Rs. 61,000</strong> Rs. 30,500/night</p>
                                </label>
                            </div>
                        </div>  
                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="properties" id="pr3">
                                <label for="pr3">
                                    <h3>Lion's Den</h3>
                                    <p><strong>Rs. 85,000</strong> Rs. 42,500/night</p>
                                </label>
                            </div>
                        </div> 

                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="properties" id="pr4">
                                <label for="pr4">
                                    <h3>Lenny’s Den</h3>
                                    <p><strong>Rs. 58,000</strong> Rs. 29,000/night</p>
                                </label>
                            </div>
                        </div> 

                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="properties" id="pr5">
                                <label for="pr5">
                                    <h3>Rainbow Cottage</h3>
                                    <p><strong>Rs. 71,500</strong> Rs. 35,500/night</p>
                                </label>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="properties" id="pr6">
                                <label for="pr6">
                                    <h3>Lion's Den Terrace</h3>
                                    <p><strong>Rs. 45,000</strong> Rs. 22,500/night</p>
                                </label>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 col-xxl-auto">
                            <div class="label-radio">
                                <input type="radio" name="properties" id="pr7">
                                <label for="pr7">
                                    <h3>Lion's Den Garden Wing</h3>
                                    <p><strong>Rs. 41,000</strong> Rs. 20,500/night</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-fields">
                      <div class="row gx-2 gx-md-3">
                           <div class="col-6 col-lg-3">
                               <div class="form-group">
                                    <label for="">Email Address <sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control">
                               </div>
                           </div>
                           <div class="col-6 col-lg-3">
                               <div class="form-group">
                                    <label for="">Mobile Number <sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control">
                               </div>
                           </div>
                           <div class="col-6 col-lg-3">
                               <div class="form-group">
                                    <label for="">First Name <sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control">
                               </div>
                           </div>
                           <div class="col-6 col-lg-3">
                               <div class="form-group">
                                    <label for="">Last Name <sup class="text-danger">*</sup></label>
                                    <input type="text" class="form-control">
                               </div>
                           </div>
                      </div> 
                      
                      
                      <div class="col-12 text-end">
                          <div class="row justify-content-end">
                              <div class="col-auto">
                                    <table class="table fs-13 table-sm table-borderless w-auto booking-price-info">
                                        <tr>
                                            <td>Price per night:</td>
                                            <td>Rs. 37,000/night</td>
                                        </tr>
                                        <tr>
                                            <td>Number of nights:</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <th>Base price:</th>
                                            <td>Rs. 74,000</td>
                                        </tr>
                                        <tr>
                                            <td>Tax (18%):</td>
                                            <td>Rs. 13,320</td>
                                        </tr>
                                        <tr class="fs-6">
                                            <th class="text-primary">Net price:</th>
                                            <th class="text-primary">Rs. 87,320</th>
                                        </tr>
                                    </table>
                              </div>
                          </div>
                      </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="">Note</label>
                        <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                    </div> 
                </div> 

                <div class="col-12">
                    <button class="btn btn-primary fw-bold w-100" style="max-width:170px;">SUBMIT</button>
                </div>



            </div> 
        </section>
</div>

<?php include("footer.php");?>