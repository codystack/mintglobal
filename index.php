<?php
    $page = "Home";
    include "./components/header.php";
    include "./components/navbar.php";
?>
    
    <main>
        
        <div class="slider-area position-relative">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Providing engineering solutions at ease.</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">We are constantly spotting problems and plotting how to solve them.</p>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
                
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">We are the engine that powers engineering.</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">We take care of everything.</p>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
            <div class="video-icon">
                <a class="btn-icon" href="mailto:info@mintglobal.com.ng" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
        
        <section class="about-low-area section-padding40">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption mb-10">
                            <div class="section-tittle mb-35">
                                <span class="text-primary mb-0">WHO WE ARE</span>
                                <h2>Contributing to Nigerian Content Capacity Building.</h2>
                            </div>
                            <p>Mint Global Resources Limited occupies the frontline position in the EPC and I industry as a result of its deliberate disposition in ensuring that it represents the best of the industry through perfectly harnessing the combinatory supply of both her human and materials resources available in her workforce for optimum project execution while ensuring a commensurate satisfactory level of her complete personnel makeup. In achieving this, a first rate service delivery is guaranteed with spill offs of professionalism and excellence.</p>
                            <a href="about" class="text-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-9 offset-md-1 offset-sm-1">
                        <div class="about-right-cap">
                            <div class="about-right-img">
                                <img src="assets/img/about.jpg" alt="">
                            </div>
                            <div class="img-cap">
                                <span>#1</span>
                                <p>in offering services to Engineering, Marine and Oil & Gas Sectors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "./components/certifications.php"; ?>
        
        <?php include "./components/services.php"; ?>

        <?php include "./components/client-logo.php"; ?>

        <div class="gallery-area">
            <div class="container-fluid p-0 fix">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="single-gallery text-center">
                            <div class="gallery-img" style="background-image: url(assets/img/bg-5.jpg);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                    <p style="font-size: 30px;">What we enjoy most is watching our ideas <br>take shape, and eventually come to life.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "./components/cta.php"; ?>
    </main>

<?php include "./components/footer.php"; ?>