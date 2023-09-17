<?php
    $page = "Contact";
    include "./components/header.php";
    include "./components/navbar.php";
?>
    <main>

        <div class="contact-form testimonial-area section-padding40 gray-bg">
            <div class="container">
                
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="section-tittle">
                            <span class="text-primary mb-0">CONTACT US</span>
                            <h2>Get in touch<br>with us</h2>
                        </div>
                    </div>
                </div>

                <div class="mb-100">
                    <hr>
                </div>

                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12">
                        <!-- galary -->
                        <div class="single-gallery">
                            <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                    <h3><a href="#">Need to make<br> an enquiry?</a></h3>
                                    <p>Whether you have questions or you would just like to say hello, contact us.</p>
                                    <div>
                                        <div class="media contact-info">
                                            <span class="contact-info__icon mt-3"><i class="ti-location-pin"></i></span>
                                            <div class="media-body">
                                                <p class="text-white">Kosinskoye shosse 7, Novoye Pavlino microdistrict, balashikha, Moscow Region.</p>
                                            </div>
                                        </div>
                                        <div class="media contact-info">
                                            <span class="contact-info__icon mt-3"><i class="ti-location-pin"></i></span>
                                            <div class="media-body">
                                                <p class="text-white">Royal Office Building, <br>KM 25 Lekki - Epe Expressway, Lagos.</p>
                                            </div>
                                        </div>
                                        <div class="media contact-info">
                                            <span class="contact-info__icon mt-3"><i class="ti-mobile"></i></span>
                                            <div class="media-body">
                                                <p>+7 977 492 56 85<br>+234 813 480 6494</p>
                                            </div>
                                        </div>
                                        <div class="media contact-info">
                                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                                            <div class="media-body">
                                                <p>info@mintglobal.com.ng</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 white-bg">
                        <!-- contact-form -->
                        <div class="form-wrapper">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2 mb-30">
                                        <h2>Drop your message</h2>
                                    </div>
                                </div>
                            </div>
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-box user-icon mb-15">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-box email-icon mb-15">
                                            <input type="text" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-box email-icon mb-15">
                                            <input type="text" name="email" placeholder="Phone no.">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 mb-15">
                                        <div class="select-itms">
                                            <select name="select" id="select2">
                                                <option value="">Reason</option>
                                                <option value="">Topic one</option>
                                                <option value="">Topic Two</option>
                                                <option value="">Topic Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-15">
                                            <textarea name="message" id="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="submit-info">
                                            <button class="submit-btn2" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "./components/cta.php"; ?>

    </main>

<?php include "./components/footer.php"; ?>