<?php include("header.php"); ?>
<section class="section header-pad-top section-properties-filter bg-secondary-light3 pb-0 px-xl-3">
    <div class="container py-3 mw-xl-100 animFade">
        <div class="row gy-3">
            <div class="col-12 col-xl">
                <div class="booking-form-wrapper booking-form-small">
                    <?php include('booking-form.php');?>
                </div>
            </div>
            <div class="col-12 col-xl-3 align-self-center">
                <div class="filter-wrap">
                    <ul class="list-unstyled mb-0 d-flex align-items-center justify-content-lg-end">
                        <li class="dropdown">
                            <button class="btn btn-icon rounded-pill text-secondary" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,5"  data-bs-auto-close="outside">
                                <i class="bi bi-sliders me-2"></i> <span>Filter</span>
                            </button>
                            <div class="dropdown-menu filter-menu-box">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="fl-title fw-bold">Filter</div>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn menu-close p-2 py-0 pe-0 lh-1 fs-5" data-close-menu>
                                                    <i class="bi bi-x-lg"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="fl-title">Pets Friendly</div>
                                            </div>
                                            <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" id="">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="fl-title">Special invitations</div>
                                            </div>
                                            <div class="col-auto">                                               
                                                <input class="form-check-input" type="checkbox" value="" id="">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="fl-title">Price Per Night</div>
                                            </div>
                                            <div class="col-12 pt-3">
                                                <div class="range-outer">
                                                    <div id="range-slider"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-price-info pt-3">
                                            <div class="row gx-2">
                                                <div class="col-6">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>Min Price</li>
                                                        <li class="pi-min-val">Rs.<span>3,000</span></li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>Max Price</li>
                                                        <li class="pi-max-val">Rs.<span>60,000</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <button type="button" class="btn ps-0 btn-sm btn-link fw-medium">Clear filters</button>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-sm btn-secondary">APPLY</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <button class="btn btn-light rounded-pill btn-icon text-secondary" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,5">
                                <i class="bi bi-sort-down-alt me-2"></i> <span>Sort By</span>
                            </button>
                            <ul class="dropdown-menu bg-secondary-light3">
                                <li>
                                    <a class="active dropdown-item" href="#">
                                        Price Low to High
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Price High to Low
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        Latest Properties
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-properties-listing py-5">
    <div class="container">
        <div class="properties-listing">
            <div class="property-item animFade">
                <div class="row gy-3">
                    <div class="col-12 col-lg-6">
                        <div class="swiper card-slider">
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
                    </div>
                    <div class="col-12 col-lg-6">
                        <h2>Bliss Cottage</h2>
                        <div class="pr-location mb-3">Nainital Hills, Uttarakhand</div>
                        <p>This three-bedroom private pool Villa, located in a gated high-end residential complex just off the busy lanes of the Candolim area is the perfect place to stay if you are looking to enjoy all of what North Goa has to offer.</p>
                        <ul class="key-features nav">
                            <li><span><img src="assets/images/occupancy.svg" alt="8 Guests"></span><span>8 <br>Guests</span></li>
                            <li><span><img src="assets/images/bedrooms.svg" alt="3 Bedrooms"></span><span>3 <br>Bedrooms</span></li>
                            <li><span><img src="assets/images/bathrooms.svg" alt="3 Bathrooms"></span><span>3 <br>Bathrooms</span></li>
                            <li><span><img src="assets/images/staff.svg" alt="2 Staff"></span><span>2 <br>Staff</span></li>
                            <li><span><img src="assets/images/pet.svg" alt="Pet Friendly"></span><span>Pet <br>Friendly</span></li>
                        </ul>
                        <div class="pr-price mb-4">INR 3,700 /night</div>
                        <div class="row g-3">
                            <div class="col-auto">
                                <a href="property-details.php" class="btn btn-secondary">VIEW DETAIL</a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-primary">BOOK NOW</a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-secondary">FAQ's</a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="property-item animFade">
                <div class="row gy-3">
                    <div class="col-12 col-lg-6">
                        <div class="swiper card-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="w-100" src="./assets/images/pr-2.jpg" alt="" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="./assets/images/pr-2.jpg" alt="" loading="lazy">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="./assets/images/pr-2.jpg" alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="cs-next"><i class="bi bi-chevron-right"></i></div>
                            <div class="cs-prev"><i class="bi bi-chevron-left"></i></div>
                            <div class="swiper-pagination"></div>
                        </div>   
                    </div>
                    <div class="col-12 col-lg-6">
                        <h2>Bliss Cottage</h2>
                        <div class="pr-location mb-3">Nainital Hills, Uttarakhand</div>
                        <p>This three-bedroom private pool Villa, located in a gated high-end residential complex just off the busy lanes of the Candolim area is the perfect place to stay if you are looking to enjoy all of what North Goa has to offer.</p>
                        <ul class="key-features nav">
                            <li><span><img src="assets/images/occupancy.svg" alt="8 Guests"></span><span>8 <br>Guests</span></li>
                            <li><span><img src="assets/images/bedrooms.svg" alt="3 Bedrooms"></span><span>3 <br>Bedrooms</span></li>
                            <li><span><img src="assets/images/bathrooms.svg" alt="3 Bathrooms"></span><span>3 <br>Bathrooms</span></li>
                            <li><span><img src="assets/images/staff.svg" alt="2 Staff"></span><span>2 <br>Staff</span></li>
                            <li><span><img src="assets/images/pet.svg" alt="Pet Friendly"></span><span>Pet <br>Friendly</span></li>
                        </ul>
                        <div class="pr-price mb-4">INR 3,700 /night</div>
                        <div class="row g-3">
                            <div class="col-auto">
                                <a href="property-details.php" class="btn btn-secondary">VIEW DETAIL</a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-primary">BOOK NOW</a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-secondary">FAQ's</a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>


        <div class="load-more-wrap pt-5 d-flex justify-content-center">
            <button class="btn btn-link fw-bold">
                <i class="bi bi-arrow-down"></i>
                Load more properties
            </button>
        </div>


    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function(){    
    
        // range slider script
        if($('#range-slider').length){        
            window.rslider = document.getElementById('range-slider');
            noUiSlider.create(rslider, {            
                start: [3000, 60000], //60000
                connect: true,
                step: 500,
                range: {
                    'min': 3000,
                    'max': 60000
                }
            });   
            rslider.noUiSlider.on('update', function (values, handle, unencoded, tap, positions, noUiSlider) {
            
                let minVal = new Intl.NumberFormat("en-IN").format(parseInt(values[0]).toFixed(0));
                let maxVal = new Intl.NumberFormat("en-IN").format(parseInt(values[1]).toFixed(0));
                $(".pi-min-val span").text(minVal);
                $(".pi-max-val span").text(maxVal);
                $("#min_val").val(minVal);
                $("#max_val").val(maxVal);  
            });
        }


    })
</script>
<?php include("footer.php");?>

