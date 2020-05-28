<?php $this->load->view('include/head') ;?>
    <body>
        <!--[if IE]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
       
        <!--====== PRELOADER PART START ======-->

        <div class="preloader">
            <div class="loader">
                <div class="ytp-spinner">
                    <div class="ytp-spinner-container">
                        <div class="ytp-spinner-rotator">
                            <div class="ytp-spinner-left">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                            <div class="ytp-spinner-right">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== PRELOADER PART ENDS ======-->
        
        <!--====== NAVBAR TWO PART START ======-->

        <section class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                           
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo public_url(); ?>/images/logo.svg" alt="Logo">
                            </a>
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="page-scroll" href="<?php echo site_url('accueil');?>">Accueil</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="<?php echo site_url('accueil');?>#services">Nos Services</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="<?php echo site_url('accueil');?>#projects">Nos Projets</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="<?php echo site_url('accueil');?>#contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>

        <!--====== NAVBAR TWO PART ENDS ======-->
        
        <!--====== SLIDER PART START ======-->

        <section id="design">
            <div>
                <div class="carousel-inner">
                    <div class="carousel-item design active">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 m-auto">
                                    <div class="slider-content">
                                        <h1 class="title">Section Design</h1>
                                        <p class="text">Design pour une expérience unique.</p>
                                        <ul class="slider-btn rounded-buttons text-center">
                                            <li><a class="main-btn rounded-one" href="#"><i class="lni lni-angle-double-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                    </div> <!-- carousel-item -->
                </div>
            </div>
        </section>

        <!--====== SLIDER PART ENDS ======-->

        <!--====== FEATRES TWO PART START ======-->

        <section id="services" class="features-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-title text-center pb-10">
                        <h3 class="title">Designe Graphique </h3>
                            <p class="text text-center">Nous concevons des solutions de communication visuelle  a l' aide de forme graphique utilisabe sur tout type de supports 
                            </p>
                        </div> <!-- row -->
                    </div>
                </div> <!-- row -->

                <div class="row justify-content-center mt-40 s-b">
                    <div class="col-lg-6 col-md-6 col-sm-10 pt-40 s-i">
                        <div class="single-features bg-white mt-40" style="border: 1px solid #c100ff">
                            <div class="cont-img">
                                <img src="<?php echo public_url(); ?>/images/se.png">
                            </div>
                            <div class="features-title-icon d-flex justify-content-between">
                            <h3 class="features-title"> L'identité Visuelle</h3>
                            </div>
                            <div class="features-content">
                            <p class="text"> Avec de logo sur mesure , carte de visite et de  flyer exprimez  , 
                                    votre style vos valeurs ainsi que vos ambitions.</p>
                            <!--    <a class="features-btn" href="design.html">Découvrir</a>-->
                            </div>
                        </div> <!-- single features -->
                    </div>
                    <div class="col-lg-6 col-md-6 sm-no-visible">
                        <div class="single-features mt-40">
                           <img class="shape" src="<?php echo public_url(); ?>/images/se.png" alt="Shape">
                        </div> <!-- single features -->
                    </div>
                </div> <!-- row -->


                <div class="row justify-content-center mt-40 s-b">
                     <div class="col-lg-6 col-md-6 sm-no-visible">
                        <div class="single-features mt-40">
                           <img class="shape" src="<?php echo public_url(); ?>/images/slider/co.png" alt="Shape">
                        </div> <!-- single features -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 pt-40 s-i">
                        <div class="single-features mt-40 t-center" style="border: 1px solid #c100ff">
                            <div class="cont-img">
                                <img src="<?php echo public_url(); ?>/images/slider/co.png">
                            </div>
                            <div class="features-title-icon d-flex justify-content-between">
                            <h3 class="features-title">Le marketing et la publicité</h3>
                            </div>
                            <div class="features-content">
                            <p class="text">Communiquez de maniere efficace la qualité de vos
                                     produits et services. </p>
                              <!--  <a class="features-btn" href="design.html">Découvrir</a>-->
                            </div>
                        </div> <!-- single features -->
                    </div>
                </div> <!-- row -->

                <div class="row justify-content-center mt-40 s-b">
                    <div class="col-lg-6 col-md-6 col-sm-10 pt-40 s-i">
                        <div class="single-features bg-white mt-40" style="border: 1px solid #c100ff">
                            <div class="cont-img">
                                <img src="<?php echo public_url(); ?>/images/slider/an.png" class="img-responsive">
                            </div>
                            <div class="features-title-icon d-flex justify-content-between">
                            <h3 class="features-title">Animation</h3>
                            </div>
                            <div class="features-content">
                                <p class="text">Developpez votre histoire à l'aide d'animations, des videos et de formes artistiques qui vous convient le plus .</p>
                               <!-- <a class="features-btn" href="design.html">Découvrir</a>-->
                            </div>
                        </div> <!-- single features -->
                    </div>
                    <div class="col-lg-6 col-md-6 sm-no-visible">
                        <div class="single-features mt-40">
                           <img class="shape" src="<?php echo public_url(); ?>/images/slider/an.png" alt="Shape">
                        </div> <!-- single features -->
                    </div>
                </div> <!-- row -->

            </div> <!-- container -->
        </section>

        <!--====== FEATRES TWO PART ENDS ======-->

        <!--====== PORTFOLIO PART START ======-->

        <section id="portfolio" class="portfolio-area portfolio-four pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="section-title text-center pb-10">
                            <div class="title">
                                <img src="<?php echo public_url(); ?>/images/robo.png" width="20%" alt="">
                            </div>
                            <p class="text">Prener plaisir de visiter  les differents  services </p>
                            <div class="light-rounded-buttons mt-30">
                            <a href="<?php echo site_url('accueil');?>#services" rel="nofollow" class="main-btn light-rounded-two">Nos services</a>
                            </div>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>

        <!--====== PORTFOLIO PART ENDS ======-->

        
        <!--====== FOOTER PART START ======-->

        <?php $this->load->view('include/footer') ;?> 