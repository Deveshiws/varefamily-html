<?php include("header.php");?>
<div class="page-wrap property-add">
        <div class="page-title mb-4">
            <div class="row gy-3 align-items-center">
                <div class="col align-self-end">
                    <h1 class="h2 mb-0">Add Property</h1>
                </div>
                <div class="col-auto">
                    <a href="manage-properties.php" class="btn rounded-pill btn-secondary-light">
                        <i class="icon-list me-2"></i>
                        All Properties
                    </a>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="page-content">
                <form action="">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="">Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Name*">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="">State<span class="text-danger">*</span></label>
                                <select class="form-control" name="" id="" >
                                    <option value="" selected>Select State</option>
                                </select>
                            </div>
                        </div> 
                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="">Location<span class="text-danger">*</span></label>
                                <select class="form-control" name="" id="" >
                                    <option value="">Select Location</option>
                                </select>
                            </div>
                        </div>       
                        
                        <div class="col-12 col-lg-3">
                            <div class="form-group">
                                <label for="">Max Occupancy<span class="text-danger">*</span></label>
                                <select class="form-control" name="" id="" >
                                    <option value="">Please Select</option>
                                </select>
                            </div>
                        </div>  
                        <div class="col-12 col-lg-3">
                            <div class="form-group">
                                <label for="">Bedrooms<span class="text-danger">*</span></label>
                                <select class="form-control" name="" id="" >
                                    <option value="">Please Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="form-group">
                                <label for="">Bathrooms<span class="text-danger">*</span></label>
                                <select class="form-control" name="" id="" >
                                    <option value="">Please Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="form-group">
                                <label for="">Dedicated Staff<span class="text-danger">*</span></label>
                                <select class="form-control" name="" id="" >
                                    <option value="">Please Select</option>
                                </select>
                            </div>
                        </div>      


                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Images<span class="text-danger">*</span></label>
                                <div class="upload-wrapper">
                                    <div class="upload-info">
                                        <i class="icon-upload"></i>
                                        <div class="upload-info-text">
                                            <strong>Drag & Drop Or <span class="text-primary">Browse</span> Your File.</strong>
                                            <small>Max size: 2mb | Image size: 1600px . 1080 px</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   




                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Description<span class="text-danger">*</span></label>
                                <img class="w-100" src="assets/images/editor.png" alt="">
                            </div>
                        </div>   
                        
                        


                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <button class="btn btn-save btn-primary">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> 
        </section>
</div>

<?php include("footer.php");?>