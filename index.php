<?php include("header.php"); ?>
<section class="section section-hero pb-xl-0 bg-primary-light">
    <div class="swiper hero-slides">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-slide-img" style="background-image: url(./assets/images/hero-1.webp);"></div>
            </div>
            <div class="swiper-slide">
                <div class="hero-slide-img" style="background-image: url(./assets/images/hero-2.webp);"></div>
            </div>
            <div class="swiper-slide">
                <div class="hero-slide-img" style="background-image: url(./assets/images/hero-3.webp);"></div>
            </div>
            <div class="swiper-slide">
                <div class="hero-slide-img" style="background-image: url(./assets/images/hero-4.webp);"></div>
            </div>
        </div>
        <div class="swiper-pagination pagination-white swiper-pagination-vertical"></div>
    </div>
    <div class="container animFade">
        <div class="hero-content text-xl-center  flex-grow-1">
            <div class="hero-title">
                <h1>Your Holiday <em>Your Home ...</em></h1>    
            </div>
            <div class="hero-body">     
                <p>V are Family provides a curated collection of comfortable, elegant vacation homes across India.</p>                   
            </div>  

            <div class="booking-form-wrapper">
                <?php include('booking-form.php');?>
            </div>
        </div>       
    </div>
</section>

<section class="section-location d-none d-xl-block">    
    <div class="container animFade" data-trigger-pos="100%">
        <ul class="nav">
            <li><a href="#">GOA</a></li>
            <li><a href="#">KASAULI HILLS</a></li>
            <li><a href="#">MUSSOORIE</a></li>
            <li><a href="#">NAINITAL HILLS</a></li>
            <li><a href="#">TARUDHAN VALLEY</a></li>
        </ul>
    </div>
</section>


<section class="section section-experience d-table w-100">
    <div class="swiper experience-slides d-none d-lg-block">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg" style="background-image: url(./assets/images/ex-1.webp);"></div>                
            </div>
            <div class="swiper-slide">
                <div class="bg" style="background-image: url(./assets/images/hero-2.webp);"></div>               
            </div>
            <div class="swiper-slide">
                <div class="bg" style="background-image: url(./assets/images/hero-3.webp);"></div>                
            </div>
            <div class="swiper-slide">
                <div class="bg" style="background-image: url(./assets/images/hero-4.webp);"></div>                
            </div>
            <div class="swiper-slide">
                <div class="bg" style="background-image: url(./assets/images/ex-2.jpg);"></div>
            </div>
        </div>
        <div class="swiper-pagination pagination-white swiper-pagination-vertical"></div>
    </div>
   <div class="d-table-cell align-middle">
        <div class="container">
            <div class="collapsible-wrapper animFade">
                <h2>Experience Our Difference</h2>
                <ul class="list-unstyled mb-0">
                    <li class="active">
                        <h3>We go the extra mile</h3>
                        <div class="collapse-text">
                            <div class="collapse-text-inner">
                                <p>Every vacation home in V are Family’s portfolio is chosen with great care.</p>
                                <p>Tasteful, functional, and fully furnished homes with all amenities and a warm energy are a certainty.</p>


                                <div class="collapse-img d-lg-none">
                                    <img src="./assets/images/ex-1.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h3>Tasteful, comfortable homes</h3>
                        <div class="collapse-text" style="display: none;">
                            <div class="collapse-text-inner">
                                <p>Every vacation home in V are Family’s portfolio is chosen with great care.</p>
                                <p>Tasteful, functional, and fully furnished homes with all amenities and a warm energy are a certainty.</p>
                                <div class="collapse-img d-lg-none">
                                    <img src="./assets/images/hero-2.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h3>The joy of a home cooked meal</h3>
                        <div class="collapse-text" style="display: none;">
                            <div class="collapse-text-inner">
                                <p>Every vacation home in V are Family’s portfolio is chosen with great care.</p>
                                <p>Tasteful, functional, and fully furnished homes with all amenities and a warm energy are a certainty.</p>
                                <div class="collapse-img d-lg-none">
                                    <img src="./assets/images/hero-3.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h3>Sensible prices</h3>
                        <div class="collapse-text" style="display: none;">
                            <div class="collapse-text-inner">
                                <p>Every vacation home in V are Family’s portfolio is chosen with great care.</p>
                                <p>Tasteful, functional, and fully furnished homes with all amenities and a warm energy are a certainty.</p>
                                <div class="collapse-img d-lg-none">
                                        <img src="./assets/images/hero-4.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h3>Occasions made special</h3>
                        <div class="collapse-text" style="display: none;">
                            <div class="collapse-text-inner">
                                <p>Every vacation home in V are Family’s portfolio is chosen with great care.</p>
                                <p>Tasteful, functional, and fully furnished homes with all amenities and a warm energy are a certainty.</p>
                                <div class="collapse-img d-lg-none">
                                    <img src="./assets/images/ex-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
   </div>
</section>

<section class="section section-invitations section-swiper bg-secondary-light2">
    <div class="container ">
        <div class="title text-center animFade">
            <h2>Special Invitations</h2>
        </div>

        <div class="tabs-content animFade">
            <div class="row g-5">
                <div class="col-12 col-lg-auto order-2 order-lg-0">
                    <div class="tabs-outer swiper tabs-slider">
                        <ul class="tabs-btn swiper-wrapper flex-lg-wrap nav-tabs list-unstyled mb-0  border-0" role="tablist">
                            <li class="swiper-slide active">
                                <button class="btn rounded-pill active" data-bs-toggle="tab" id="general-offer" data-bs-target="#general-offer-pane" type="button"  role="tab" aria-controls="general-offer-pane" aria-selected="true">General Offer</button>                          
                            </li>
                            <li class="swiper-slide">
                                <button class="btn rounded-pill" data-bs-toggle="tab" id="launch-offer" data-bs-target="#launch-offer-pane" type="button"  role="tab" aria-controls="launch-offer-pane" aria-selected="false">Launch Offer</button>
                            </li>
                            <li class="swiper-slide"><button class="btn rounded-pill" data-bs-toggle="tab" id="exclusive-offer" data-bs-target="#exclusive-offer-pane" type="button"  role="tab" aria-controls="exclusive-offer-pane" aria-selected="false">Exclusive Offer</button></li>
                            <li class="swiper-slide"><button class="btn rounded-pill" data-bs-toggle="tab" id="special-offer" data-bs-target="#special-offer-pane" type="button"  role="tab" aria-controls="special-offer-pane" aria-selected="false">Special Offer</button></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg order-1 order-lg-0">
                    <div class="invitations-content">
                        <div class="tab-content">

                            <div class="tab-pane show active" id="general-offer-pane" role="tabpanel" aria-labelledby="general-offer" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-12 col-lg-auto">
                                        <div class="mx-n3 mx-sm-0">
                                            <img loading="lazy" src="./assets/images/general-offer.jpg" alt="General Offer">
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-lg-5">
                                        <div class="tc-title">General Offer</div>
                                        <div class="tc-content">
                                            <p>Carecations enable you to embark on inspiring journeys specially designed to lead positive change for a better tomorrow.</p>
                                        </div>

                                        <div class="offer-date">Valid Till: 30<sup>th</sup> SEP 2024</div>

                                        <button class="btn btn-secondary" data-fancybox data-src="#invitations">VIEW DETAILS</button>
                                    </div>
                                </div>
                            </div>
                            <div id="invitations" class="offer-popup popup">
                                <div class="ic-info mb-4 pb-2">
                                    <p>GENERAL OFFER</p>
                                    <h3 class="my-3">Carecations enable you to embark on inspiring journeys specially designed to lead positive change for a better tomorrow.</h3>
                                    <h6>Valid Till: 30th SEP 2024</h6>
                                </div>
                                <div class="row gy-4 gx-5">
                                    <div class="col-12 col-md-5">
                                        <img loading="lazy" src="./assets/images/general-offer.jpg" class="w-100" alt="General Offer">
                                    </div>
                                    <div class="col-12 col-md">
                                        <div class="content">
                                            <p>After years as an investment banker and management professional Aman decided to follow his heart and became an entrepreneur. His passion for hospitality, travelling and all things outdoors helped him transition seamlessly into founding and running V are Family. </p>
                                            <p>His desire to provide guests with the perfect holiday drives him to be involved in every step of the selection process for vacation homes. Living out of Delhi, Aman spends his days working, playing golf and enjoying the company of his wife Puja and their two children Armaan and Nayantara. He is a graduate of Babson College, USA, and has worked as an investment banker in New York and with Ernst & Young in India.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="launch-offer-pane" role="tabpanel" aria-labelledby="launch-offer" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-12 col-lg-auto">
                                        <div class="mx-n3 mx-sm-0">
                                            <img loading="lazy" src="./assets/images/general-offer.jpg" alt="Launch Offer">
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-lg-5">
                                        <div class="tc-title">Launch Offer</div>
                                        <div class="tc-content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, libero reiciendis! Distinctio ea consequatur quos.</p>
                                        </div>

                                        <div class="offer-date">Valid Till: 30<sup>th</sup> SEP 2024</div>

                                        <button class="btn btn-secondary" data-fancybox data-src="#invitations">VIEW DETAILS</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="exclusive-offer-pane" role="tabpanel" aria-labelledby="exclusive-offer" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-12 col-lg-auto">
                                        <div class="mx-n3 mx-sm-0">
                                            <img loading="lazy" src="./assets/images/general-offer.jpg" alt="Exclusive Offer">
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-lg-5">
                                        <div class="tc-title">Exclusive Offer</div>
                                        <div class="tc-content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, libero reiciendis! Distinctio ea consequatur quos.</p>
                                        </div>

                                        <div class="offer-date">Valid Till: 30<sup>th</sup> SEP 2024</div>

                                        <button class="btn btn-secondary" data-fancybox data-src="#invitations">VIEW DETAILS</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="special-offer-pane" role="tabpanel" aria-labelledby="special-offer" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-12 col-lg-auto">
                                        <div class="mx-n3 mx-sm-0">
                                            <img loading="lazy" src="./assets/images/general-offer.jpg" alt="Special Offer">
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-lg-5">
                                        <div class="tc-title">Special Offer</div>
                                        <div class="tc-content">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, libero reiciendis! Distinctio ea consequatur quos.</p>
                                        </div>

                                        <div class="offer-date">Valid Till: 30<sup>th</sup> SEP 2024</div>

                                        <button class="btn btn-secondary" data-fancybox data-src="#invitations">VIEW DETAILS</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-track d-lg-none">
        <div class="cs-prev"><i class="bi bi-chevron-left"></i></div>
        <div class="cs-next"><i class="bi bi-chevron-right"></i></div>
    </div>
</section>


<section class="section py-0 section-guests-comments section-swiper bg-primary-light position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="swiper comments-thumb-slider comments-images h-100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="ratio ratio-4x3">
                                <img loading="lazy" src="./assets/images/commnets-img.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ratio ratio-4x3">
                                <img loading="lazy" src="./assets/images/5.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ratio ratio-4x3">
                                <video src="./assets/images/video.mp4"></video>
                                <a href="./assets/images/video.mp4" class="video-control" data-fancybox>
                                    <i class="bi bi-play-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="comments-slider-wrapper animFade">
                    <h3>Guest Comments</h3>
                    
                    <div class="swiper-outer-wrapper">
                        <div class="swiper comments-slider h-100">
                            <div class="swiper-wrapper">
                                <article class="swiper-slide">
                                    <blockquote>
                                        <p>Luxurious experience. The warmth and humility of the staff is incredible. Food is to die for.<br>
                                        Thank you. Will Surely come again.</p>
                                    </blockquote>
                                    <cite>
                                        <strong>Vikrant</strong> 
                                        Rainbow Cottage, Uttarakhand<br>
                                        June 27, 2023
                                    </cite>                               
                                </article>
                                <article class="swiper-slide">
                                    <blockquote>
                                        <p>V are Family actually treated us like family. What an amazing stay at this beautiful place with amazing support staff. We enjoyed every moment... <button class="bg-transparent border-0 text-primary fs-6 fst-italic" data-fancybox data-src="#comment">Read More</button></p> 
                                    </blockquote>
                                    <cite>
                                        <strong>Nikita</strong>
                                        Lion's Den, Terrace,Ramgarh<br>
                                        June 27, 2023
                                    </cite>                               
                                </article>
                                <article class="swiper-slide">
                                    <blockquote>
                                        <p>We visited with our family. The stay was really good. 5 stars to location, staff & food. Really appreciate the staff. Recommend the place to others. Overall stay was better than any hotel. </p>
                                    </blockquote>
                                    <cite>
                                        <strong>Hemant</strong>
                                        Bliss Cottage, Uttarakhand<br>
                                        June 16, 2023
                                    </cite>                               
                                </article>
                            </div>
                        </div>
                    </div>
                    
                    <div class="comments-logo">
                       <img src="assets/images/sites-logo.jpg" alt="">
                    </div>


                    <div id="comment" class="offer-popup popup">
                        <div class="comments-slider-wrapper ps-0 text-center">
                            <article>
                                <blockquote>
                                    <p>We visited with our family. The stay was really good. 5 stars to location, staff & food. Really appreciate the staff. Recommend the place to others. Overall stay was better than any hotel. </p>
                                </blockquote>
                                <cite>
                                    <strong>Hemant</strong>
                                    Bliss Cottage, Uttarakhand<br>
                                    June 16, 2023
                                </cite>                               
                            </article>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="swiper-track mt-0">
        <div class="cs-prev"><i class="bi bi-chevron-left"></i></div>
        <div class="cs-next"><i class="bi bi-chevron-right"></i></div>
    </div>
</section>

<section class="section section-home-owner bg-secondary-light2">
    <div class="container">
        <div class="title text-center text-secondary animFade">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h2 class="h3 text-black">Are you the privileged owner of a second home?</h2>
                    <p>We have a wonderful opportunity for you. We can convert your home into an income generating property, and provide regular maintenance to ensure it’s always functional and in pristine condition. No more worrying about your home falling into disrepair or struggling to keep up with the day to day hassles of managing it.</p>                   
                </div>
            </div>
        </div>
    </div>   
    <div class="container-fluid px-0">     
        <div class="home-owner-cards">
            <div class="row gy-lg-4">
                <div class="col-12 col-md-4 animFade">
                    <div class="card card-primary">
                        <div class="card-img-top">
                            <span>
                                <img loading="lazy" src="./assets/images/hw-1.jpg" alt="Sustained Income Generation">
                            </span>
                        </div>
                        <div class="card-body pb-0">
                            <h3>Sustained Income Generation</h3>
                            <p>Owning a second home can be a slow drain on your wallet. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 animFade">
                    <div class="card card-primary">
                        <div class="card-img-top">
                            <span>
                                <img loading="lazy" src="./assets/images/hw-2.jpg" alt="Maintenance of Your Home">
                            </span>
                        </div>
                        <div class="card-body pb-0">
                            <h3>Maintenance of Your Home</h3>
                            <p>We will treat your home with the utmost care.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 animFade">
                    <div class="card card-primary">
                        <div class="card-img-top">
                            <span>
                                <img loading="lazy" src="./assets/images/hw-3.jpg" alt="Flexibility of Your Use">
                            </span>
                        </div>
                        <div class="card-body pb-0">
                            <h3>Flexibility of Your Use</h3>
                            <p>It should go without saying you are always welcome in your own home. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-wrap animFade">
            <a href="join-our-network.php" class="btn btn-secondary">JOIN OUR NETWORK</a>
        </div>
    </div>
</section>



<section class="section section-blog section-swiper">
    <div class="container">
        <div class="title text-center animFade">
            <h2>Recent Blogs</h2>         
        </div>
        
        <div class="home-owner-cards">
            <div class="swiper blog-swiper">
                <div class="swiper-wrapper row gy-4 gx-3 gx-sm-4">
                    <div class="col-12 col-md-4 animFade swiper-slide">
                        <a href="#" class="card card-secondary">
                            <div class="card-img-top">
                                <span>
                                    <img loading="lazy" src="./assets/images/blog-1.jpg" alt="Explore Our Newest Apartments in Kasauli Hills">
                                </span>
                            </div>
                            <div class="card-footer">
                                <time datetime="2024-01-20">20 Jan, 2024</time>
                                <h3>Explore Our Newest Apartments in Kasauli Hills</h3>
                            </div>
                        </a>
                    </div> 
                    <div class="col-12 col-md-4 animFade swiper-slide">
                        <a href="#" class="card card-secondary">
                            <div class="card-img-top">
                                <span>
                                    <img loading="lazy" src="./assets/images/blog-2.jpg" alt="A First-Timer's Guide to Goa: Your Ultimate Vacation Experience">
                                </span>
                            </div>
                            <div class="card-footer">
                                <time datetime="2024-01-20">20 Jan, 2024</time>
                                <h3>A First-Timer's Guide to Goa: Your Ultimate Vacation Experience</h3>
                            </div>
                        </a>
                    </div> 
                    <div class="col-12 col-md-4 animFade swiper-slide">
                        <a href="#" class="card card-secondary">
                            <div class="card-img-top">
                                <span>
                                    <img loading="lazy" src="./assets/images/blog-3.jpg" alt="Experience Tranquillity and Serenity: Escape to Kasauli with Us">
                                </span>
                            </div>
                            <div class="card-footer">
                                <time datetime="2024-01-20">20 Jan, 2024</time>
                                <h3>Experience Tranquillity and Serenity: Escape to Kasauli with Us</h3>
                            </div>
                        </a>
                    </div>                
                </div>
            </div>
            
        </div>
    </div>

    <div class="swiper-track d-lg-none">
        <div class="cs-prev"><i class="bi bi-chevron-left"></i></div>
        <div class="cs-next"><i class="bi bi-chevron-right"></i></div>
    </div>

    <div class="container">
        <div class="btn-wrap animFade">
            <a href="blog.php" class="btn btn-secondary">READ ALL BLOGS</a>
        </div>
    </div>
</section>



<section class="section section-insta section-swiper bg-secondary-light2">
    <div class="container">
        <div class="insta-link mb-4 mb-sm-5 animFade">
            <a href="#" target="_blank">
                <i class="icon-instagram"></i>
                @varefamilyvacationhomes
            </a>
        </div>
        
        <div class="insta-images">
            <div class="swiper insta-swiper insta-image-inner">
                <div class="swiper-wrapper row gx-3 gx-sm-4">
                    <div class="col-3 animFade swiper-slide">
                        <a href="#"><img loading="lazy" src="./assets/images/insta-1.jpg" alt=""></a>
                    </div>
                    <div class="col-3 animFade swiper-slide">
                        <a href="#"><img loading="lazy" src="./assets/images/insta-2.jpg" alt=""></a>
                    </div>
                    <div class="col-3 animFade swiper-slide">
                        <a href="#"><img loading="lazy" src="./assets/images/insta-3.jpg" alt=""></a>
                    </div>
                    <div class="col-3 animFade swiper-slide">
                        <a href="#"><img loading="lazy" src="./assets/images/insta-4.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-track d-lg-none">
        <div class="cs-prev"><i class="bi bi-chevron-left"></i></div>
        <div class="cs-next"><i class="bi bi-chevron-right"></i></div>
    </div>

</section>

<?php include("tagline.php");?>



<?php include("footer.php");?>

