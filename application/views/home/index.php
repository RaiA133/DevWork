<main id="main" class="main">

    <style>
        @media (min-width: 1200px) {
            .container-feature {
                max-width: 1100px;
            }
        }
    </style>

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/home.css" />


    <div class="pagetitle">

        <!-- Start Hero Area -->
        <section class="hero-area">
            <!-- Single Slider -->
            <div class="hero-inner">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 co-12">
                            <div class="home-slider">
                                <div class="hero-text">
                                    <h1 class="wow fadeInUp" data-wow-delay=".3">Ask anything or become a well-skilled Developer.</h1>
                                    <p class="wow fadeInUp" data-wow-delay=".5s">Devwork is a web application platform that can be used to unite all developers, workers, freelancers, skilled persons, or maybe ordinary people to collaborate with everyone for mutual benefits.

                                    </p>
                                    <div class="button wow fadeInUp " data-wow-delay=".7s">
                                        <a href="home/explore?category=" class="btn">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
        </section>
        <!--/ End Hero Area -->
        <!-- Start Service Area -->
        <section class="services section">
            <div class="container container-feature">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title align-left">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Core Features</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Provide Awesome Service With Our Application</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of this app features, all the benefits can be obtained from other users to all of us, so be an active user in using this application</p>
                        </div>
                    </div>
                </div>
                <div class="single-head">
                    <img class="service-patern wow fadeInLeft" data-wow-delay=".5s" src="<?= base_url(); ?>assets/img/home/service/service-patern.png" alt="#">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-service wow fadeInUp" data-wow-delay=".2s">
                                <h3><a href="service-single.html">Discover, Explore people wants</a></h3>
                                <div class="icon">
                                    <i class="bi bi-search"></i>
                                </div>
                                <p>Discover, Explore & Understanding Clients</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-service wow fadeInUp" data-wow-delay=".4s">
                                <h3><a href="service-single.html">Provide attractive offers & prices</a></h3>
                                <div class="icon">
                                    <i class="bi bi-clipboard2-check"></i>
                                </div>
                                <p>Art Direction & Brand Communication</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-service wow fadeInUp" data-wow-delay=".6s">
                                <h3><a href="service-single.html">Become Developer or Designer with your skills</a></h3>
                                <div class="icon">
                                    <i class="bi bi-code-slash"></i>
                                </div>
                                <p>Digital Product UX, Design & Development</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-service wow fadeInUp" data-wow-delay=".8s">
                                <h3><a href="service-single.html">Cooperate with everyone around the world</a></h3>
                                <div class="icon">
                                    <i class="bi bi-bar-chart"></i>
                                </div>
                                <p>Marketing Strategy & SEO Campaigns</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /End Services Area -->
        <section class="section free-version-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="section-title mb-60">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">DevWork.</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Post anything you wants or<br>Be a skilled Dev</h2>
                            <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Please, Register so you can get more benefits,<br> features and commercial license.</p>

                            <?php if ($this->session->userdata('email')) {
                                $link = base_url('home/explore?category=');
                                $title_btn = "Go Explore";
                            } else {
                                $link = base_url('auth/registration');
                                $title_btn = "Register Now";
                            }
                            ?>
                            <div class="button">
                                <a href="<?= $link ?>" rel="nofollow" class="btn wow fadeInUp" data-wow-delay=".8s"><?= $title_btn ?></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main><!-- End #main -->