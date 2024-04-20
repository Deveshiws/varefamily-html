<?php include("header.php"); ?>
<section class="section section-top section-booking">
    <div class="container">
        <form action="">
            <div class="row g-5">
                <div class="col-12 col-lg-7">
                     <div class="form-wrapper pt-lg-4">
                        <h2>Guest Information</h2>
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>First Name <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Last Name <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Email Address <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>State <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>City <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="company-info">
                                        <label class="form-check-label" for="company-info">
                                             Check this if you wish to enter company info
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>    
                     
                     <div class="form-wrapper pt-5 mt-5 border-top border-top-1 border-secondary-light">
                        <h2>Company Information</h2>
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>Company Name <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>GST No. <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>State <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label>City <sup>*</sup></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                     </div>


                     
                     <div class="form-wrapper pt-5">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="consent">
                                        <label class="form-check-label" for="consent">
                                            I certify that the information provided above is correct and this can be considered as my signature.
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check-terms">
                                        <label class="form-check-label" for="check-terms">
                                            I accept all the <a href="">terms and conditions</a>.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-5">
                    <div class="booking-information py-4 rounded-5">
                        <h3>Booking Information</h3>                       
                        <div class="swiper card-slider rounded-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="w-100" src="./assets/images/pr-1.jpg" alt="" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="./assets/images/pr-1.jpg" alt="" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="./assets/images/pr-1.jpg" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="cs-next"><i class="bi bi-chevron-right"></i></div>
                            <div class="cs-prev"><i class="bi bi-chevron-left"></i></div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <div class="booking-info-text">
                            <div class="property-name mb-3">
                                <h3 class="h1 fw-bold mb-2">Bliss Cottage</h3>
                                <p>Nainital Hills, Uttarakhand</p>    
                            </div>   
                            <ul class="list-unstyled">
                                <li>Checkin - Tue, 09 April 2024</li>
                                <li>Checkout - Thu, 11 April 2024</li>
                                <li>No. of nights - 2 nights</li>
                                <li>No. of guests - 2 adults, 1 child</li>
                            </ul>                         
                        </div>

                        <div class="booking-amount">
                            <table class="table table-borderless">
                                <tr>
                                    <td>INR 45,000 x 2 nights</td>
                                    <td class="fw-bold" align="right">INR 70,000</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Coupon code">
                                            <button class="btn btn-secondary" type="button">Apply</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tax (12%)</td>
                                    <td align="right">INR 8,400</td>
                                </tr>
                                <tr class="fw-bold">
                                    <td>Total</td>
                                    <td align="right">INR 78,400</td>
                                </tr>
                            </table>
                        </div>

                        <button class="btn btn-primary rounded-pill fw-bold w-100">PAY NOW</button>

                    </div> 
                </div>
            </div>
        </form>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function(){
         

    })
</script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBe52aO4If59Vz2wRpoVUzio1wDt9c_xsI&callback=initMap" async defer></script> -->
<?php include("footer.php");?>

