<?php
get_header();
?>

<div class="slider container-fluid">
    <div class="row slides-1">

        <div class="col-12 slide">
            <div class="col-12 slide-1"
                style="background-image: url(' <?php bloginfo('template_directory'); ?>/images/main-slider-one.jpg');">
                <div class="col-12 slide-text">
                    <img class="slider-design-icon-left"
                        src="<?php bloginfo('template_directory'); ?>/images/slider-design-icon-left.png" alt="">
                    <img class="slider-design-icon-right"
                        src="<?php bloginfo('template_directory'); ?>/images/slider-design-icon-right.png" alt="">
                    <h3 class="slide-text-h3">WELCOME TO AGRICULTURE FARM</h3>
                    <h1 class="slider-heading">Pure Organic<br>Products</h1>
                </div>
                <button class="slider-button">Discover More</button>
            </div>
        </div>

        <div class="col-12 slide">
            <div class="col-12 slide-2"
                style="background-image: url('<?php bloginfo('template_directory'); ?>/images/main-slider-two.jpg');">
                <div class="col-12 slide-text">
                    <img class="slider-design-icon-left"
                        src="<?php bloginfo('template_directory'); ?>/images/slider-design-icon-left.png" alt="">
                    <img class="slider-design-icon-right"
                        src="<?php bloginfo('template_directory'); ?>/images/slider-design-icon-right.png" alt="">
                    <h3 class="slide-text-h3">WELCOME TO AGRICULTURE FARM</h3>
                    <h1 class="slider-heading">Pure Agriculture<br>Product</h1>
                </div>
                <button class="slider-button">Discover More</button>
            </div>
        </div>

    </div>
    <button class="prev" onclick="prevSlide()">&#10094;</button>
    <button class="next" onclick="nextSlide()">&#10095;</button>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/css/script.js"></script>

<div class="section-introduction container-fluid">
    <div class="inner-introduction-section row">

        <div class="introduction-image col-md-6">
            <img class="introduction-image-1"
                src="<?php bloginfo('template_directory'); ?>/images/introduction-image-1.png" alt="">
            <img class="introduction-image-2"
                src="<?php bloginfo('template_directory'); ?>/images/introduction-image-2.png" alt="">
        </div>

        <div class="introduction-detail col-md-6">
            <div class="introduction-top col-12">
                <img class="introduction-logo"
                    src="<?php bloginfo('template_directory'); ?>/images/introduction-logo.png" alt="">
                <h5 class="introduction-top-h5">OUR INTRODUCTION</h5>
                <h1 class="introduction-top-h1">Agriculture & Organic Product Form</h1>
                <p class="p-primary">There are many variations of passages of lorem ipsum available but the majority
                    have suffered alteration in some form by injected humor or random word which don't look even.</p>
            </div>
            <div class="introduction-bottom col-12">
                <div class="introduction-left col-6">
                    <div class="list container-fluid">
                        <div class="inner-list row">
                            <div class="list-item col">
                                <img class="list-icon"
                                    src="<?php bloginfo('template_directory'); ?>/images/list-icon.png" alt="">
                                Professional Farmers
                            </div>
                            <div class="list-item col">
                                <img class="list-icon"
                                    src="<?php bloginfo('template_directory'); ?>/images/list-icon.png" alt="">
                                Quam orance semin
                            </div>
                            <div class="list-item col">
                                <img class="list-icon"
                                    src="<?php bloginfo('template_directory'); ?>/images/list-icon.png" alt="">
                                Acinia simply free
                            </div>
                        </div>
                    </div>
                    <img class="introduction-signature"
                        src="<?php bloginfo('template_directory'); ?>/images/signature.png" alt="">
                    <p class="introduction-left-p">Co Founder & CEO</p>

                </div>
                <div class="introduction-right col-6">
                    <div class="first-circle col-12">
                        <div class="circle-data col">
                            <div class="circle col"
                                style="background-image: url('<?php bloginfo('template_directory'); ?>/images/first-circle.png');">
                                90%
                            </div>
                            Organic<br>Solutions
                        </div>
                    </div>
                    <div class="second-circle col-12">
                        <div class="circle-data col">
                            <div class="circle col"
                                style="background-image: url('<?php bloginfo('template_directory'); ?>/images/second-circle.png');">
                                50%
                            </div>
                            Quality<br>Agriculture
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feature-background container container-fluid">
    <img class="background-image" src="<?php bloginfo('template_directory'); ?>/images/section-background.png" alt="">
</div>

<div class="features-section container container-fluid">
    <div class="features-inner-section row">
        <div class="features col">
            <div class="left col-6">
                <h6>FEATURE 01</h6>
                <h2>We Use<br>New Technologies</h2>
            </div>
            <div class="right col-6">
                <img class="features-image" src="<?php bloginfo('template_directory'); ?>/images/tractor.png" alt="">
            </div>
        </div>
        <div class="features col">
            <div class="left col-6">
                <h6>FEATURE 02</h6>
                <h2>Making<br>Healthy Foods</h2>
            </div>
            <div class="right col-6">
                <img class="features-image" src="<?php bloginfo('template_directory'); ?>/images/agriculture.png"
                    alt="">
            </div>
        </div>
        <div class="features col">
            <div class="left col-6">
                <h6>FEATURE 03</h6>
                <h2>Reforming<br>in the Systems</h2>
            </div>
            <div class="right col-6">
                <img class="features-image" src="<?php bloginfo('template_directory'); ?>/images/farmer.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="services-section container-fluid">
    <div class="inner-service-section row">
        <div class="services-top col-12">
            <img class="services-logo" src="<?php bloginfo('template_directory'); ?>/images/introduction-logo.png"
                alt="">
            <h5 class="services-top-h5">WELCOME TO AGRICON</h5>
            <h1 class="services-top-h1">What We're Offering</h1>
        </div>
        <div class="services-bottom col-12">
            <div class="service col-3">
                <div class="service-image col">
                    <img class="service-image-1" src="<?php bloginfo('template_directory'); ?>/images/service-1.png"
                        alt="">
                </div>

                <div class="service-text">
                    <h3 class="service-text-h3">Agriculture<br>Products</h3>
                    <h4 class="service-text-h4">Lorem ium dolor sit<br>ametad pisicing elit sed<br>simply do ut.</h4>
                </div>
            </div>
            <div class="service col-3">
                <div class="service-image col-6">
                    <img class="service-image-1" src="<?php bloginfo('template_directory'); ?>/images/service-1.png"
                        alt="">
                </div>
                <div class="service-text col-6">
                    <h3 class="service-text-h3">Organic<br>Products</h3>
                    <h4 class="service-text-h4">Lorem ium dolor sit<br>ametad pisicing elit sed<br>simply do ut.</h4>
                </div>
            </div>
            <div class="service col-3">
                <div class="service-image col-6">
                    <img class="service-image-1" src="<?php bloginfo('template_directory'); ?>/images/service-1.png"
                        alt="">
                </div>
                <div class="service-text col-6">
                    <h3 class="service-text-h3">Fresh<br>Vegetables</h3>
                    <h4 class="service-text-h4">Lorem ium dolor sit<br>ametad pisicing elit sed<br>simply do ut.</h4>
                </div>
            </div>
            <div class="service col-3">
                <div class="service-image col-6">
                    <img class="service-image-1" src="<?php bloginfo('template_directory'); ?>/images/service-1.png"
                        alt="">
                </div>
                <div class="service-text col-6">
                    <h3 class="service-text-h3">Dairy<br>Products</h3>
                    <h4 class="service-text-h4">Lorem ium dolor sit<br>ametad pisicing elit sed<br>simply do ut.</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="knowus-section container-fluid">
    <div class="row knowus-details">
        <div class="knowus-left col-7">
            <img class="knowus-image" src="<?php bloginfo('template_directory'); ?>/images/knowus.png" alt="">
            <button class="play-button">
                <div class="triangle"></div>
            </button>

        </div>
        <div class="knowus-right col-5">
            <div class="knowus-top container-fluid">
                <img class="knowus-logo" src="<?php bloginfo('template_directory'); ?>/images/introduction-logo.png"
                    alt="">
                <h5 class="knowus-top-h5">GET TO KNOW US</h5>
                <h1 class="knowus-top-h1">Growing Healthy Food</h1>
                <p class="knowus-top-p">Lorem ipsum dolor sit amet nsectetur cing elituspe ndisse suscipit sagitis leo
                    sit.</p>
            </div>
            <div class="knowus-mid container-fluid">
                <div class="knowus-list row">
                    <div class="knowus-list-item col">
                        <img class="knowus-list-icon"
                            src="<?php bloginfo('template_directory'); ?>/images/list-icon.png" alt="">
                        Nsectetur cing elit.
                    </div>
                    <div class="knowus-list-item col">
                        <img class="knowus-list-icon"
                            src="<?php bloginfo('template_directory'); ?>/images/list-icon.png" alt="">
                        Suspe ndisse suscipit sagittis leo.
                    </div>
                    <div class="knowus-list-item col">
                        <img class="knowus-list-icon"
                            src="<?php bloginfo('template_directory'); ?>/images/list-icon.png" alt="">
                        Entum estibulum dignissim posuere.
                    </div>
                </div>
            </div>
            <div class="knowus-bottom container-fluid">
                <div class="knowus-bottom-inner-section row">
                    <div class="knowus-bottom col-3">
                        <img class="knowus-bottom-image"
                            src="<?php bloginfo('template_directory'); ?>/images/know-us-count.png" alt="">
                    </div>
                    <div class="knowus-bottom-right col-8">
                        <div class="knowus-odometer col">
                            <h1>870,500 </h1>
                            <!-- <div class="subs-odometer">0</div> -->
                            <!-- <script src="<?php echo get_template_directory_uri(); ?>/css/odometer.js"></script>
                                <script>
                                    const subsOdometer = document.querySelector('.subs-odometer');

                                    const odometer = new odometer({
                                        el: subsOdometer;
                                    })

                                    // odometer.update(1086);
                                    subsOdometer.innerHTML = 10684;
                                </script> -->
                        </div>
                        <div class="knowus-bottem-right-text col">
                            <p>Agriculture, Organic and Dairy Products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-section container-fluid">
    <div class="row team-section-top">
        <div class="team-left col-4">
            <img class="knowus-logo" src="<?php bloginfo('template_directory'); ?>/images/introduction-logo.png" alt="">
            <h5 class="team-left-h5">MEET THE TEAM</h5>
            <h2 class="team-left-h2">Expert Farmers</h2>
            <p class="team-left-p">Lorem ipsum is simply free text available. Aenean eu leo quam. Pellentesque ornare
                sem
                lacinia quam venenatis vestibulum. Aenean lacinia bibendum.</p>
        </div>
        <div class="team-right col-8">
            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-wrapper container-sm d-flex  justify-content-around">
                            <div class="card  " style="width: 18rem;">
                                <img src="<?php bloginfo('template_directory'); ?>/images/team-2-263x300.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-body-h3">Jessica brown</h3>
                                    <h5 class="card-body-h5">Customer</h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?php bloginfo('template_directory'); ?>/images/team-1-263x300.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-body-h3">Caleb Hoffman</h3>
                                    <h5 class="card-body-h5">Customer</h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?php bloginfo('template_directory'); ?>/images/team-3-263x300.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-body-h3">Bradley Kim</h3>
                                    <h5 class="card-body-h5">Customer</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="card-wrapper container-sm d-flex  justify-content-around">
                            <div class="card  " style="width: 18rem;">
                                <img src="<?php bloginfo('template_directory'); ?>/images/team-2-263x300.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-body-h3">Jessica brown</h3>
                                    <h5 class="card-body-h5">Customer</h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?php bloginfo('template_directory'); ?>/images/team-1-263x300.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-body-h3">Caleb Hoffman</h3>
                                    <h5 class="card-body-h5">Customer</h5>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img src="<?php bloginfo('template_directory'); ?>/images/team-3-263x300.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-body-h3">Bradley Kim</h3>
                                    <h5 class="card-body-h5">Customer</h5>

                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="team-section-bottom">
        <img class="team-section-bg-image" src="<?php bloginfo('template_directory'); ?>/images/team-section-bg.png"
            alt="">
    </div>
</div>

<div class="projects-section container-fluid">
    <div class="projects-top row">
        <img class="services-logo" src="<?php bloginfo('template_directory'); ?>/images/introduction-logo.png" alt="">
        <h5 class="projects-top-h5">CLOSED PROJECTS</h5>
        <h1 class="projects-top-h1">Latest Projects List</h1>
    </div>


    <div class="projects-slider">
        <div class="projects-slides container-fluid">
            <div class="projects-slide row">
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-1.jpg" alt=""></div>
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-2.jpg" alt=""></div>
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-3.jpg" alt=""></div>
            </div>
            <div class="projects-slide row">
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-4.jpg" alt=""></div>
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-5.jpg" alt=""></div>
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-6.jpg" alt=""></div>
            </div>
            <div class="projects-slide row">
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-1.jpg" alt=""></div>
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-2.jpg" alt=""></div>
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-3.jpg" alt=""></div>
            </div>
            <div class="projects-slide row">
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-4.jpg" alt=""></div>
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-5.jpg" alt=""></div>
                <div class="projects-image-section col-4"><img class="projects-images"
                        src="<?php bloginfo('template_directory'); ?>/images/project-v-6.jpg" alt=""></div>
            </div>
        </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/css/projects-script.js"></script>
</div>

<div class="discover-section container-fluid"
    style="background-image: url('<?php bloginfo('template_directory'); ?>/images/discover-bg.jpg');">
    <div class="discover-inner-section row">
        <h1 class="discover-h1">Agriculture Matters to<br>the Future</h1>
        <button class="discover-button">Discover More</button>
    </div>
</div>

<div class="clients container-fluid">
    <div class="clients-top row">
        <div class="clients-top-details col-12">
            <div class="first-detail col-3">
                <div class="detail-image-box">
                    <img class="detail-image" src="<?php bloginfo('template_directory'); ?>/images/details-image-1.png"
                        alt="">
                </div>
                <h1 class="detail-text-h1">6,420</h1>
                <h4 class="detail-text-h4">Agriculture Products</h4>
            </div>
            <div class="first-detail col-3">
                <div class="detail-image-box">
                    <img class="detail-image" src="<?php bloginfo('template_directory'); ?>/images/details-image-2.png"
                        alt="">
                </div>
                <h1 class="detail-text-h1">8,800</h1>
                <h4 class="detail-text-h4">Projects Completed</h4>
            </div>
            <div class="first-detail col-3">
                <div class="detail-image-box">
                    <img class="detail-image" src="<?php bloginfo('template_directory'); ?>/images/details-image-3.png"
                        alt="">
                </div>
                <h1 class="detail-text-h1">9,280</h1>
                <h4 class="detail-text-h4">Satisfied Clients</h4>
            </div>
            <div class="first-detail col-3">
                <div class="detail-image-box">
                    <img class="detail-image" src="<?php bloginfo('template_directory'); ?>/images/details-image-4.png"
                        alt="">
                </div>
                <h1 class="detail-text-h1">1,800</h1>
                <h4 class="detail-text-h4">Expert Farmers</h4>
            </div>
        </div>
    </div>
    <div class="clients-bottom row">
        <div class="clients-bottom-details col-12">
            <div class="bottom-first-detail col-2">
                <div class="bottom-detail-image-box">
                    <img class="clients-bottom-detail-image"
                        src="<?php bloginfo('template_directory'); ?>/images/client-1.png" alt="">
                </div>
            </div>
            <div class="bottom-first-detail col-2">
                <div class="bottom-detail-image-box">
                    <img class="clients-bottom-detail-image"
                        src="<?php bloginfo('template_directory'); ?>/images/client-2.png" alt="">
                </div>
            </div>
            <div class="bottom-first-detail col-2">
                <div class="bottom-detail-image-box">
                    <img class="clients-bottom-detail-image"
                        src="<?php bloginfo('template_directory'); ?>/images/client-3.png" alt="">
                </div>
            </div>
            <div class="bottom-first-detail-1 col-2">
                <div class="bottom-detail-image-box">
                    <img class="clients-bottom-detail-image"
                        src="<?php bloginfo('template_directory'); ?>/images/client-4.png" alt="">
                </div>
            </div>
            <div class="bottom-first-detail col-2">
                <div class="bottom-detail-image-box">
                    <img class="clients-bottom-detail-image"
                        src="<?php bloginfo('template_directory'); ?>/images/client-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-section container-fluid">
    <div class="blog-section-top row">
        <div class="blog-section-left col-6">
            <img class="knowus-logo" src="<?php bloginfo('template_directory'); ?>/images/introduction-logo.png" alt="">
            <h5 class="blog-left-h5">FROM THE BLOG POST</h5>
            <h2 class="blog-left-h2">Latest News & Articles Directly from Blog</h2>
        </div>
        <div class="blog-section-right col-6">
            <p class="blog-left-p">Lorem ipsum is simply free text available. Aenean eu leo quam. Pellentesque ornare
                sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
    </div>
    <div class="blog-section-bottom row">
        <div class="blog-card col-4">
            <img class="blog-card-image-1" src="<?php bloginfo('template_directory'); ?>/images/blog-1.jpg" alt="">
            <div class="blog-card-text col">
                <h5 class="blog-card-text-h5">Kevin Martin</h5>
                <h2 class="blog-card-text-h2">Keep the Green Out of<br>the Potato</h2>
                <button class="blog-card-button">Read More</button>
            </div>
        </div>
        <div class="blog-card col-4">
            <img class="blog-card-image-1" src="<?php bloginfo('template_directory'); ?>/images/blog-2.jpg" alt="">
            <div class="blog-card-text col">
                <h5 class="blog-card-text-h5">Kevin Martin</h5>
                <h2 class="blog-card-text-h2">Healthiest Beans and<br>Legumes</h2>
                <button class="blog-card-button">Read More</button>
            </div>
        </div>
        <div class="blog-card col-4">
            <img class="blog-card-image-1" src="<?php bloginfo('template_directory'); ?>/images/blog-3.jpg" alt="">
            <div class="blog-card-text col">
                <h5 class="blog-card-text-h5">Kevin Martin</h5>
                <h2 class="blog-card-text-h2">Drinking Water in the<br>Morning</h2>
                <button class="blog-card-button">Read More</button>
            </div>
        </div>
    </div>
</div>

<div class="blog-bottom-2-section container-fluid"
    style="background-image: url('<?php bloginfo('template_directory'); ?>/images/blog-bottom 1.jpg');">
    <div class="blog-bottom-2-inner-section row">
        <div class="blog-bottom-2-left col-6">
            <img class="blog-bottom-2-image" src="<?php bloginfo('template_directory'); ?>/images/tractor.png" alt="">
            <h1 class="blog-bottom-2-h1">We're popular leader in<br>agriculture market globally</h1>
        </div>
        <div class="blog-bottom-2-right col-6">
            <button class="blog-bottom-2-button">Discover More</button>
        </div>
    </div>
</div>

<?php
get_footer();
?>
</body>


</html>