<?php include("header.php"); ?>
<svg width="0" height="0" class="d-none">
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" id="play">
    <g id="Group_327" transform="translate(-768 -451)">
      <g id="Ellipse_78" transform="translate(768 451)" fill="none" stroke="#f7f2ec" stroke-width="1.2">
        <circle cx="11" cy="11" r="11" stroke="none"></circle>
        <circle cx="11" cy="11" r="10.4" fill="none"></circle>
      </g>
      <g id="play-sharp" transform="translate(776.137 456.821)">
        <path id="Path_1312" d="M9,16.359l7.615-5.179L9,6Z" transform="translate(-9 -6)" fill="#f7f2ec"></path>
      </g>
    </g>
  </symbol>
  <symbol id="gallery" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.533 12.533">
    <g id="Group_116">
      <path id="Path_1275" d="M14,14h2.507v2.507H14Z" transform="translate(-14 -14)" fill="#f2e9df"></path>
      <path id="Path_1276" d="M22,14h2.507v2.507H22Z" transform="translate(-16.987 -14)" fill="#f2e9df"></path>
      <path id="Path_1277" d="M32.507,14H30v2.507h2.507Z" transform="translate(-19.974 -14)" fill="#f2e9df"></path>
      <path id="Path_1278" d="M14,22h2.507v2.507H14Z" transform="translate(-14 -16.987)" fill="#f2e9df"></path>
      <path id="Path_1279" d="M24.507,22H22v2.507h2.507Z" transform="translate(-16.987 -16.987)" fill="#f2e9df"></path>
      <path id="Path_1280" d="M30,22h2.507v2.507H30Z" transform="translate(-19.974 -16.987)" fill="#f2e9df"></path>
      <path id="Path_1281" d="M16.507,30H14v2.507h2.507Z" transform="translate(-14 -19.974)" fill="#f2e9df"></path>
      <path id="Path_1282" d="M22,30h2.507v2.507H22Z" transform="translate(-16.987 -19.974)" fill="#f2e9df"></path>
      <path id="Path_1283" d="M32.507,30H30v2.507h2.507Z" transform="translate(-19.974 -19.974)" fill="#f2e9df"></path>
    </g>
  </symbol>
</svg>
<section class="section header-pad-top pt-0 section-detail-header bg-secondary-light3 pb-0  d-none d-xl-block">
    <div class="container py-2 animFade">
        <div class="row align-items-center">
           <div class="col-auto">
               <div class="property-name">
                    <h1>Bliss Cottage</h1>
                    <p>Nainital Hills, Uttarakhand</p>
               </div>
           </div>
           <div class="col">
                <nav class="detail-page-nav">
                    <ul class="nav" id="detail-navbar">
                        <li class="nav-item"><a href="#nav-images" class="nav-link">Images</a></li>
                        <li class="nav-item"><a href="#nav-description" class="nav-link">Description</a></li>
                        <li class="nav-item"><a href="#nav-features" class="nav-link">Features</a></li>
                        <li class="nav-item"><a href="#nav-reviews" class="nav-link">Reviews</a></li>
                        <li class="nav-item"><a href="#nav-homeRules" class="nav-link">Home Rules</a></li> 
                        <li class="nav-item"><a href="#nav-location" class="nav-link">Location</a></li> 
                    </ul>
                </nav>
           </div>
           <div class="col-auto">
               <button class="btn btn-link share-btn" data-fancybox data-close-button="false" data-src="#share">
                    <i class="bi bi-box-arrow-up  mt-n1"></i> SHARE
               </button>
           </div>
       </div>
    </div>
</section>
<div data-bs-spy="scroll" data-bs-target="#detail-navbar" data-bs-root-margin="0px 0px -65%" data-bs-smooth-scroll="true" tabindex="0">
    <div id="nav-images" class="section nav-images py-0 mb-4">
        <div class="container-fluid px-0 position-relative">
           <div class="swiper detail-image-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <span><img class="w-100" src="assets/images/1.jpg"  loading="lazy" alt=""></span>
                    </div>
                    <div class="swiper-slide">
                        <span><img class="w-100" src="assets/images/2.jpg"  loading="lazy" alt=""></span>
                    </div>
                    <div class="swiper-slide">
                        <span><img class="w-100" src="assets/images/3.jpg"  loading="lazy" alt=""></span>
                    </div>
                    <div class="swiper-slide">
                        <span><img class="w-100" src="assets/images/4.jpg"  loading="lazy" alt=""></span>
                    </div>
                    <div class="swiper-slide">
                        <span><img class="w-100" src="assets/images/5.jpg"  loading="lazy" alt=""></span>
                    </div>
                    <div class="swiper-slide">
                        <span><img  class="w-100" src="assets/images/6.jpg"  loading="lazy" alt=""></span>
                    </div>
                    <div class="swiper-slide">
                        <span><img class="w-100" src="assets/images/7.jpg"  loading="lazy" alt=""></span>
                    </div>
                    <div class="swiper-slide">
                        <span><img class="w-100" src="assets/images/8.jpg"  loading="lazy" alt=""></span>
                    </div>
                </div>

                <div class="cs-next"><i class="bi bi-chevron-right"></i></div>
                <div class="cs-prev"><i class="bi bi-chevron-left"></i></div>
                <button class="btn p-0 ps-3 fs-5 text-white btn-link share-btn d-block d-xl-none" data-fancybox data-close-button="false" data-src="#share">
                    <i class="bi bi-box-arrow-up  mt-n1"></i>
                </button>
           </div>            
            <div class="gallery-buttons">
                <ul class="list-unstyled mb-0">
                    <li>
                        <button class="btn video-btn">
                            <svg class="svg-icon-play"><use xlink:href="#play"></use></svg> Video walkthrough
                        </button>                     
                        <div id="vid-pop" class="popup popup-video" style="display: none;">
                            <div class="mb-3 fs-5 fw-bold">Video Walkthrough</div>
                            <video class="w-auto mw-100" src="assets/images/video.mp4" controls></video>
                        </div>
                    </li>
                    <li>
                        <button class="btn gallery-btn"><svg class="svg-icon-gallery"><use xlink:href="#gallery"></use></svg> <span>Show all gallery</span></button>
                    </li>
                </ul>
            </div> 
        </div>
    </div>
    <div class="container">
        <div class="m-property-info mb-4 d-xl-none">
            <div class="property-name mb-4">
                <div class="h1">Bliss Cottage</div>
                <p>Nainital Hills, Uttarakhand</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 order-2 order-xl-0">
                <div class="key-features-wrap  mb-xl-4">
                    <ul class="key-features justify-content-around pt-xl-0 nav mb-0">
                        <li><span><img src="assets/images/occupancy.svg" alt="8 Guests"></span><span><strong>8</strong> <br>Guests</span></li>
                        <li><span><img src="assets/images/bedrooms.svg" alt="3 Bedrooms"></span><span><strong>3</strong> <br>Bedrooms</span></li>
                        <li><span><img src="assets/images/bathrooms.svg" alt="3 Bathrooms"></span><span><strong>3</strong> <br>Bathrooms</span></li>
                        <li><span><img src="assets/images/staff.svg" alt="2 Staff"></span><span><strong>2</strong> <br>Staff</span></li>
                        <li><span><img src="assets/images/pet.svg" alt="Pet Friendly"></span><span><strong>Pet</strong> <br>Friendly</span></li>
                    </ul>
                </div>
            </div>
            <div class="col col-xl page-detail-column order-3 order-xl-0">
                <section id="nav-description" class="nav-content nav-description pb-5 pt-3">                    
                    <div class="content">
                        <p>A three-bedroom cozy home perched up on a hilltop with captivating valley views, overlooking the town of Shaymkhet and the surrounding lush green hills of Nainital. This home offers multiple outdoor areas to experience, including a medium size lawn, a deck with gazebo cover, a large entry porch, and a pebbled swing sit out area.</p>
                        <p>The entry leads you up a short ramp to the main home. They entry porch is a perfect hangout with comfortable seating for all, at any time of day or night. The ground floor has one bedroom, a combined drawing/dining, and an attached kitchen. The drawing area has a traditional ‘bukhari’ fireplace, to enjoy and keep everyone warm. The first floor hosts two more bedrooms with private attached balconies. All bedrooms have attached bathrooms. Your dedicated staff can arrange a bonfire and a barbeque. Tara is a lovable home pet, that ensures additional safety at all times.</p>
                    </div>
                </section>
                <section id="nav-features" class="nav-content nav-features pb-5">
                    <div class="nav-content-title">
                        <div class="row align-items-center gy-2">
                            <div class="col">
                                <h2>Features</h2>
                            </div>
                            <div class="col-auto">
                                <button class="btn py-2 btn-secondary expand-btn fw-medium">
                                    <i class="bi bi-arrows-fullscreen me-1"></i>
                                    <span>COLLAPSE ALL</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion accordion-primary accordion-flush" id="featuresAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c1">
                                Private Home Spaces
                            </button>
                            </h2>
                            <div id="c1" class="accordion-collapse collapse show" >
                                <div class="accordion-body">
                                     <ul>
                                         <li>3 double bedrooms</li>
                                         <li>Outdoor deck with gazebo cover</li>
                                         <li>Drawing room with dining area </li>
                                         <li>Private garden (medium)</li>
                                         <li>Pebbled Area with a swing sit out</li>
                                     </ul>   
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c2">
                                 Dedicated Home-Staff
                            </button>
                            </h2>
                            <div id="c2" class="accordion-collapse collapse show" >
                                <div class="accordion-body">
                                    <ul>
                                        <li>One Residential Home Cook on an additional charge ( INR 2,000 Per Night )</li>
                                        <li>One resident home-keeper</li>
                                        <li>Chief of Guest Relations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c3">
                                    Highlights
                                </button>
                            </h2>
                            <div id="c3" class="accordion-collapse collapse show" >
                                <div class="accordion-body">
                                    <ul>
                                        <li>Home cooked meals at cost</li>
                                        <li>Beach picnic basket and beach towels</li>
                                        <li>Meals & drinks in the backyard</li>
                                        <li>Splash pool in the backyard</li>
                                        <li>Easy access to explore North Goa</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c4">
                                    Amenities
                                </button>
                            </h2>
                            <div id="c4" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <ul>
                                        <li>WiFi (Broadband)</li>
                                        <li>Satellite TV (Tata Sky)</li>
                                        <li>Music system (with Bluetooth & AUX)</li>
                                        <li>Bed & bath linen (changed every third day)</li>
                                        <li>Basic bathroom toiletries</li>
                                        <li>Hairdryer</li>
                                        <li>Iron & ironing board</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c5">
                                    Facilities
                                </button>
                            </h2>
                            <div id="c5" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Private pool and a second Swimming pool, shared with villas in the community</li>
                                        <li>Air conditioners and Ceiling fans</li>
                                        <li>Daily home-keeping</li>
                                        <li>Crockery, cutlery &amp; glassware</li>
                                        <li>Bar essentials (BYOB)</li>
                                        <li>Power back-up, inverter (lights &amp; fans)</li>
                                        <li>Secured parking in the complex</li>
                                    </ul>
                                </div>
                            </div>
                        </div>                      

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c6">
                                     Kitchen
                                </button>
                            </h2>
                            <div id="c6" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Filter coffee (French press)</li>
                                        <li>Tea (Darjeeling, Masala and Green)</li>
                                        <li>Basic Indian spices</li>
                                        <li>Water filter (RO)</li>
                                        <li>One refrigerator</li>
                                        <li>Cooking range with gas</li>
                                        <li>Oven, toaster & grill</li>
                                        <li>Juicer & kettle</li>
                                        <li>Microwave</li>
                                        <li>Mixer cum grinder</li>
                                        <li>All cooking ware, pots</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="nav-reviews" class="nav-content nav-reviews pb-5">  
                    <div class="nav-content-title pb-5">
                       <div class="row g-3 align-items-center">
                            <div class="col-12 col-md-auto">
                                 <h2>Reviews</h2>
                            </div>
                            <div class="col-12 col-md">
                                <div class="comments-logo text-end pt-0">
                                    <img src="assets/images/sites-logo.jpg" alt="">
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="reviews-wrap">
                        <div class="row g-4 g-xl-5">
                            <div class="col-12 col-lg-6">
                                <div class="reviews-box" id="r1">
                                    <div class="row gx-3 align-items-center review-info">
                                        <div class="col-auto">
                                            <img src="assets/images/swati.jpg" alt="Swati">
                                        </div>
                                        <div class="col">
                                            <h4>Swati</h4>
                                            <p>Nainital Hills, Uttarakhand</p>
                                        </div>
                                    </div>
                                    <div class="row gx-2 mb-2 align-items-center">
                                        <div class="col-auto">
                                            <div class="rating-box">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="review-date">Jun, 2023</div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <div class="review-excerpt">
                                            <p>We had an amazing time, the service was amazing, the food was awesome and most importantly the house was clean and beautifully kept. The staff were amazing. Thank you for a lovely stay... 
                                            <a href="javascript:void(0)" data-src="#r1" data-type="clone" data-fancybox>more</a>
                                            </p>
                                        </div>
                                        <div class="review-full-content">
                                            <p>We had an amazing time, the service was amazing, the food was awesome and most importantly the house was clean and beautifully kept. The staff were amazing. Thank you for a lovely stay.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="reviews-box" id="r2">
                                    <div class="row gx-3 align-items-center review-info">
                                        <div class="col-auto">
                                            <img src="assets/images/swati.jpg" alt="Swati">
                                        </div>
                                        <div class="col">
                                            <h4>Swati</h4>
                                            <p>Nainital Hills, Uttarakhand</p>
                                        </div>
                                    </div>
                                    <div class="row gx-2 mb-2 align-items-center">
                                        <div class="col-auto">
                                            <div class="rating-box">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="review-date">Jun, 2023</div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <div class="review-excerpt">
                                            <p>We had an amazing time, the service was amazing, the food was awesome and most importantly the house was clean and beautifully kept. The staff were amazing. Thank you for a lovely stay... 
                                            <a href="javascript:void(0)" data-src="#r2" data-type="clone" data-fancybox>more</a>
                                            </p>
                                        </div>
                                        <div class="review-full-content">
                                            <p>We had an amazing time, the service was amazing, the food was awesome and most importantly the house was clean and beautifully kept. The staff were amazing. Thank you for a lovely stay.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="reviews-box" id="r3">
                                    <div class="row gx-3 align-items-center review-info">
                                        <div class="col-auto">
                                            <img src="assets/images/swati.jpg" alt="Swati">
                                        </div>
                                        <div class="col">
                                            <h4>Swati</h4>
                                            <p>Nainital Hills, Uttarakhand</p>
                                        </div>
                                    </div>
                                    <div class="row gx-2 mb-2 align-items-center">
                                        <div class="col-auto">
                                            <div class="rating-box">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="review-date">Jun, 2023</div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <div class="review-excerpt">
                                            <p>We had an amazing time, the service was amazing, the food was awesome and most importantly the house was clean and beautifully kept. The staff were amazing. Thank you for a lovely stay... 
                                            <a href="javascript:void(0)" data-src="#r3" data-type="clone" data-fancybox>more</a>
                                            </p>
                                        </div>
                                        <div class="review-full-content">
                                            <p>We had an amazing time, the service was amazing, the food was awesome and most importantly the house was clean and beautifully kept. The staff were amazing. Thank you for a lovely stay.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="reviews-box" id="r4">
                                    <div class="row gx-3 align-items-center review-info">
                                        <div class="col-auto">
                                            <img src="assets/images/swati.jpg" alt="Swati">
                                        </div>
                                        <div class="col">
                                            <h4>Swati</h4>
                                            <p>Nainital Hills, Uttarakhand</p>
                                        </div>
                                    </div>
                                    <div class="row gx-2 mb-2 align-items-center">
                                        <div class="col-auto">
                                            <div class="rating-box">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="review-date">Jun, 2023</div>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <div class="review-excerpt">
                                            <p>We had an amazing time, the service was amazing, the food was awesome and most importantly the house was clean and beautifully kept. The staff were amazing. Thank you for a lovely stay... 
                                            <a href="javascript:void(0)" data-src="#r4" data-type="clone" data-fancybox>more</a>
                                            </p>
                                        </div>
                                        <div class="review-full-content">
                                            <p>We had an amazing time, the service was amazing, the food was awesome and most importantly the house was clean and beautifully kept. The staff were amazing. Thank you for a lovely stay.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </section>
                <section id="nav-homeRules" class="nav-content nav-home-rules pb-5">
                    <div class="nav-content-title pb-3 border-1 border-bottom">
                        <h2>Home Rules</h2>
                    </div>
                    <div class="content">
                       <ul>
                            <li>The number of guests cannot exceed the count mentioned at the time of booking.</li>
                            <li>Please provide photo and address identification at the time of booking and arrival.</li>
                            <li>Parties, loud noises and loud music that disturb the neighbours are not permitted.</li>
                            <li>All our food is prepared fresh and as such will not be available on an immediate basis.</li>
                            <li>Any breakage or damage of any items in the home will be charged as ‘actuals’.</li>
                            <li>Any illegal activity, including the use of narcotics, prostitution and commercial activity, is not permitted.</li>
                            <li>No smoking in the rooms. Smoking is only allowed in the outdoor common areas.</li>
                            <li>Please conserve water & electricity during your stay. Kindly switch off the electronics when not in use.</li>
                       </ul>
                    </div>
                </section>
                <section id="nav-location" class="nav-content nav-location pb-5">
                    <div class="nav-content-title pb-3 border-1 border-bottom">
                        <h2>Location</h2>
                    </div> 
                    <div class="content">
                         <div id="map" class="mb-5"></div>

                         <h4>Driving Directions from Delhi</h4>
                         <ul>
                            <li>Get on to NH 9. (Refer to Google Maps to find the best route for your group.)</li>
                            <li>Continue on NH 9. Take the Hapur bypass, Garhmukteswar bypass, and Moradabad bypass, towards Rudrapur.</li>
                            <li>At Indira Gandhi Chowk, cross Rudrapurand carry on straight towards Haldwani and Kathgodam.</li>
                            <li>From Kathgodam continue toward Bhimtal and Bhowali.</li>
                            <li>At Bhowali take the road toward Ramgarh.</li>
                            <li>Around 850-900 meters down take the right turn to Shyamkhet</li>
                            <li>Continue on this road till you see a fork and sign for 'Nainital Homes' - Take the right road going up the hill Continue - you will reach a black gate - pls enter and drive till the end of the road - Bliss Cottage is the last house on the left</li>
                         </ul>
                    </div>     
                </section>
            </div>


            <aside class="col-12 pb-4 pb-xl-0 col-xl-auto sidebar-column order-1 order-xl-0">
                <div class="sidebar-outer">
                    <div class="sidebar-box">
                       <div class="price-box">
                           <div class="row gx-3">
                               <div class="col">
                                  <strong>INR 45,000 + taxes</strong>
                                  <ul class="list-unstyled mb-0">
                                    <li>2 nights</li>
                                    <li>7 guests</li>
                                  </ul>
                               </div>
                               <div class="col-auto">
                                 INR 22,500/night
                               </div>
                           </div>
                       </div>

                       <div class="offer-box">
                           <strong>APRIL SPECIAL</strong>
                           <ul class="list-unstyled  lh-1 mb-0">
                                <li>INR 35000 + taxes</li>
                                <li>INR 17,500/night</li>
                           </ul>
                       </div>


                       <div class="form-box">
                          <div class="row">
                            <div class="col-12 calendar-column dropdown">
                                <div class="row g-0">
                                    <div class="col-6">   
                                        <button class="btn btn-start-date btn-control toggle-date" type="button">
                                            <span>Arrival</span>
                                            <strong>22 March 2024</strong>
                                        </button> 
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-end-date btn-control toggle-date" type="button">
                                            <span>Departure</span>
                                            <strong>24 March 2024</strong>
                                        </button>
                                    </div>                                  
                                </div>
                                <button class="w-100 d-none calendar-btn" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,5" data-bs-auto-close="outside" data-bs-reference="parent" type="button"></button>
                                <div class="dropdown-menu p-0  dropdown-menu-end">
                                    <input id="input-calendar" type="text" class="d-none">
                                </div>
                            </div>

                            <div class="col-12 col-xl">
                                <div class="dropdown dropdown-guests">
                                    <button class="btn guests-btn btn-control" type="button"  data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,5"  data-bs-auto-close="outside"  data-bs-display="static" type="button">
                                        <span>Guests</span>
                                        <strong>5 Adults |  2 Children</strong>
                                    </button>    
                                    
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="list-unstyled m-0 guestCounter">
                                            <li>
                                                <div class="row flex-nowrap align-items-center">
                                                    <div class="col">
                                                        <div class="guests-title">
                                                            <strong>Adults</strong>
                                                            <small>Ages 18+</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="counter">
                                                            <a href="javascript:void(0)" class="btn counter-col c-minus">
                                                                <span class="icon-minus"></span>
                                                            </a>
                                                            <div class="counter-col">
                                                                <input type="hidden" class="counter-input" name="no_of_adults" data-counter-type="adults" max="8" value="3">
                                                                <strong class="count-val">0</strong>
                                                            </div>
                                                            <a href="javascript:void(0)" class="btn counter-col c-plus">
                                                                <span class="icon-plus"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row flex-nowrap align-items-center">
                                                    <div class="col">
                                                        <div class="guests-title">
                                                        <strong>Children</strong>
                                                        <small>Ages 6 -17</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="counter">
                                                            <a href="javascript:void(0)" class="btn counter-col c-minus">
                                                                <span class="icon-minus"></span>
                                                            </a>
                                                            <div class="counter-col">
                                                                <input type="hidden" class="counter-input" name="no_of_kids" data-counter-type="children" max="3" value="2">
                                                                <strong class="count-val">0</strong>
                                                            </div>
                                                            <a href="javascript:void(0)" class="btn counter-col c-plus">
                                                                <span class="icon-plus"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row flex-nowrap align-items-center">
                                                    <div class="col">
                                                        <div class="guests-title">
                                                            <strong>Infants</strong>
                                                            <small>Under 5</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="counter">
                                                            <a href="javascript:void(0)" class="btn counter-col c-minus">
                                                                <span class="icon-minus"></span>
                                                            </a>
                                                            <div class="counter-col">
                                                                <input type="hidden" class="infants-count counter-input" name="no_of_infants" max="2" value="2" data-total-guests="false">
                                                                <strong class="count-val">0</strong>
                                                            </div>
                                                            <a href="javascript:void(0)" class="btn counter-col c-plus">
                                                                <span class="icon-plus"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="dropdown-action">
                                            <a href="javascript:void(0)" class="clear-btn">Clear guests</a>
                                            <!-- <a href="javascript:void(0)" class="close-dropdown"><i class="bi bi-x-lg"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>    


                            <div class="col-12 pt-2">
                                <div class="submit-wrap">
                                    <button class="btn btn-primary rounded-pill w-100">BOOK NOW</button>
                                </div>
                            </div>


                          </div>
                       </div>

                       <div class="form-links d-none d-xl-block">
                          <ul class="list-unstyled mb-0">
                            <li><a href="">FAQ's</a></li>
                            <li><a href="">Enquire Now</a></li>
                          </ul>
                       </div>



                    </div>
                    <p class="d-none d-xl-block">Or speak to a travel advisor on the phone:</p>
                    <a href="tel:+91 98100 74777" class="btn d-none d-xl-block border border-secondary border-1 btn-outline-secondary rounded-pill d-flex align-items-center justify-content-center">
                      <i class="icon-phone-call fs-5 me-2 align-self-center"></i>  +91 98100 74777
                    </a>
                </div>
            </aside>
        </div>
    </div>
</div>
<div id="share" class="share-pop popup w-100" style="display: none;max-width: 484px;">
    <div class="pop-heading">
        <div class="row">
            <div class="col">
                <h2>Share this place</h2>
            </div>
            <div class="col-auto">
                <button onclick="Fancybox.close()" class="close-btn btn fs-5 lh-1"><div class="bi-x"></div></button>
            </div>
        </div>
    </div>
    <div class="pop-content clearfix">
        <ul class="list-unstyled share-link-list m-0">
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=[URL]&amp;t=La Avila - Villa - 09" target="_blank"><i class="bi bi-facebook"></i> Facebook</a></li>
            <li><a href="https://twitter.com/intent/tweet?url=[URL]" target="_blank"><i class="bi bi-twitter-x"></i> Twitter X</a></li>
            <li><a href="https://wa.me/?text=[URL]" data-action="share/whatsapp/share" target="_blank"><i class="bi bi-whatsapp"></i> WhatsApp</a></li>
            <li><a href="mailto:?body=[URL]&amp;subject=V are Family - Bliss Cottage - Nainital Hills, Uttarakhand"><i class="bi bi-envelope"></i> Email</a></li>
        </ul>
    </div>
</div>

<style>
    .footer-main {
        padding-bottom: 200px;
    }
</style>
<div class="m-fixed-info d-xl-none">
    <div class="container">
        <div class="m-booking-info">
            <div class="row  align-items-center">
                <div class="col">
                    <button class="btn">
                        <div class="btn-col">
                            <i class="icon-calendar-start"></i><span  class="m-departure">08 Mar</span>
                        </div>
                        <div class="btn-col">
                            <i class="icon-calendar-end"></i><span class="m-arrival">10 Mar</span>
                        </div>
                    </button>
                </div>
                <div class="col-auto">
                    <button class="btn p-0 ps-3 fs-5 text-secondary btn-link share-btn d-block d-xl-none" data-fancybox data-close-button="false" data-src="#share">
                        <i class="bi bi-box-arrow-up  mt-n1"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="price-box px-0">
            <div class="row gx-3">
                <div class="col">
                    <strong>INR 45,000 + taxes</strong>
                    <ul class="list-unstyled mb-0">
                        <li>2 nights</li>
                        <li>7 guests</li>
                    </ul>
                </div>
                <div class="col-auto">
                    INR 22,500/night
                </div>
            </div>
        </div>  
        
        
        <div class="row g-0">
            <div class="col">
                <button class="btn px-2 w-100 btn-primary">BOOK NOW</button>
            </div>
            <div class="col">
                <button class="btn px-2 w-100 btn-secondary">ENQUIRE NOW</button>
            </div>
        </div>

    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function(){
         let slideData = [{src:"assets/images/1.jpg"},{src:"assets/images/2.jpg"},{src:"assets/images/3.jpg"},{src:"assets/images/4.jpg"},{src:"assets/images/5.jpg"},{src:"assets/images/6.jpg"},{src:"assets/images/7.jpg"},{src:"assets/images/8.jpg"}]
        $(document).on("click",".gallery-btn", function() {
            let $index = $(this).index();
            // Image gallery with thumbnails
            Fancybox.show(slideData,{
               Images:{
                protected: true,
               },
               Thumbs: {
                    type: "classic",
                    showOnStart: false,
                },
            });
        });


        $(document).on("click",".video-btn", function() {          
            Fancybox.show([{ src: "#vid-pop", type: "inline" }],{
               
            });
        });




        function resetDateInput(){
            $(".btn-start-date span").text("Arrival Date");
            $(".btn-end-date span").text("Departure Date");
        }

     
        let calendarBtn = new bootstrap.Dropdown(".calendar-btn");
        let guestsBtn = new bootstrap.Dropdown(".guests-btn");
        

        let inputCalendar = document.getElementById('input-calendar');
        console.log("inputCalendar", inputCalendar);
        window.datepicker = new HotelDatepicker(inputCalendar, {
            inline: true,
            moveBothMonths: true,
            clearButton: true,
            // minNights: 4,
            topbarPosition: 'bottom',
            onSelectRange: function() {
                let startDate = fecha.format(this.start, `Do MMM`);
                let endDate = fecha.format(this.end, `Do MMM`);
                $(".btn-start-date strong").text(startDate);
                $(".btn-end-date strong").text(endDate);   
                calendarBtn.toggle();             
            } ,
            onDayClick: function() {                
                if(this.start){
                    $(".btn-end-date strong").text("Departure");
                    let startDate = fecha.format(this.start, `Do MMM`);
                    $(".btn-start-date strong").text(startDate);
                }
                if(this.end){
                    let endDate = fecha.format(this.end, `Do MMM`);
                    $(".btn-end-date strong").text(endDate); 
                }

                if(!this.start && !this.end){
                    resetDateInput()
                }


            }         
        });

        //console.log("datepicker", datepicker)

        $("#clear-input-calendar").on("click",function(){
            $(".btn-start-date strong").text("Arrival");
            $(".btn-end-date strong").text("Departure");
        });


        $(".toggle-date").on("click", function(e){
            e.stopPropagation();            
            guestsBtn.hide();    
            calendarBtn.toggle();
        })



         // Counter
         $('.guestCounter').guestCounter({
            maxGuests: 8,
            onInit: function(element, totalGuests, guestsObj) {
                console.log("onInit totalGuests", totalGuests);
                console.log("onInit guestsObj", guestsObj);
                
                element.parents('.dropdown-guests').find(".guests-btn strong").text(totalGuests === 0 ? "Guests" : totalGuests === 1 ? `${totalGuests} Guest`:`${totalGuests} Guests`);
            },
            onChange: function(element,totalGuests,guestsObj) {         
                element.parents('.dropdown-guests').find(".guests-btn strong").text(totalGuests === 0 ? "Guests" : totalGuests === 1 ? `${totalGuests} Guest`:`${totalGuests} Guests`);
            },
            onIncrement: function(v){
            // console.log("onIncrement ", v);
            }
        });












 // Initialize and display the map
 // Create the script tag, set the appropriate attributes
 let script = document.createElement('script');
script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBe52aO4If59Vz2wRpoVUzio1wDt9c_xsI&callback=initMap';
script.async = true;
 window.initMap = function() { 
      let centerCoordinates = { lat: 40.712776, lng: -74.005974 };     
      let map = new google.maps.Map(document.getElementById('map'), {
        center: centerCoordinates,
        zoom: 12 
      });
}
document.head.appendChild(script);





 })
</script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBe52aO4If59Vz2wRpoVUzio1wDt9c_xsI&callback=initMap" async defer></script> -->
<?php include("footer.php");?>

