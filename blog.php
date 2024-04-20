<?php include("header.php"); ?>
<section class="section section-top section-blog pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title text-center animFade">
                    <h2>Blogs</h2>
                </div>
            </div>
        </div>
         <div class="search-wrap">
            <div class="row">
                <div class="col-12 col-md">
                    <div class="input-group h-100">
                        <span class="input-group-text">
                            <i class="icon-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search blog here">
                    </div>
                </div>
                <div class="col-12 col-md-auto col-lg-3">
                    <ul class="list-unstyled mb-0 d-flex align-items-center">
                        <li class="dropdown w-100">
                            <button class="btn btn-light rounded-pill btn-icon text-secondary dropdown-toggle w-100" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,5">
                                <i class="bi bi-sort-down-alt me-2"></i> <span>Sort By</span>
                            </button>
                            <ul class="dropdown-menu bg-secondary-light3">
                                <li>
                                    <a class="active dropdown-item" href="#">
                                        A-z
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
<section class="section section-blog py-5">
    <div class="container">
        <div class="blog-cards">
            <div class="row gy-5">
                <div class="col-12 col-md-4 animFade">
                    <a href="blog-detail.php" class="card card-secondary">
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
                <div class="col-12 col-md-4 animFade">
                    <a href="blog-detail.php" class="card card-secondary">
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
                <div class="col-12 col-md-4 animFade">
                    <a href="blog-detail.php" class="card card-secondary">
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
                <div class="col-12 col-md-4 animFade">
                    <a href="blog-detail.php" class="card card-secondary">
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
                <div class="col-12 col-md-4 animFade">
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
                <div class="col-12 col-md-4 animFade">
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
        <div class="load-more-wrap pt-5 d-flex justify-content-center">
            <button class="btn btn-link fw-bold">
                <i class="bi bi-arrow-down"></i>
                Load more
            </button>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function(){
         

    })
</script>
<?php include("footer.php");?>

