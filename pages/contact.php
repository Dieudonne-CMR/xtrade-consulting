<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.hibootstrap.com/techex/default/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 14:18:40 GMT -->
<head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Owl Carousel Min CSS --> 
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!--=== Magnific Popup Min CSS ===-->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Nice Select CSS --> 
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="assets/css/theme-dark.css">

        <!--=== Title & Favicon ===-->
        <title>Techex - Technology & IT Services HTML Template</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>
    <body>
        <!-- Start HeaderFile Link-->
        <?php
            include ('includes/header.php');
        ?>
        <!-- End HeaderFile Link-->

        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-layer"></div>
                    <div class="search-layer"></div>
                    <div class="search-layer"></div>
                    
                    <div class="search-close">
                        <span class="search-close-line"></span>
                        <span class="search-close-line"></span>
                    </div>

                    <div class="search-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->

        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Nous Contacter</h3>
                    <ul>
                        <li>
                            <a href="home">Accueil</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Contact Form Area -->
        <div class="contact-form-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Let's Send Us a Message Below</h2>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-4">
                        <div class="contact-info mr-20">
                            <span>Contact Info</span>
                            <h2>Let's Connect With Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet varius mi, ut hendrerit magna mollis ac. </p>
                            <ul>
                                <li>
                                    <div class="content">
                                        <i class='bx bx-phone-call'></i>
                                        <h3>Phone Number</h3> 
                                        <a href="tel:12122555511">+1 (212) 255-5511</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="content">
                                        <i class='bx bxs-map'></i>
                                        <h3>Address</h3> 
                                        <span>124 Virgil A Virginia, USA</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="content">
                                        <i class='bx bx-message'></i>
                                        <h3>Contact Info</h3>
                                        <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#9ef6fbf2f2f1deeafbfdf6fbe6b0fdf1f3"><span class="__cf_email__" data-cfemail="bfd7dad3d3d0ffcbdadcd7dac791dcd0d2">[email&#160;protected]</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Your Name <span>*</span></label>
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Your Email <span>*</span></label>
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone Number <span>*</span></label>
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Your Subject <span>*</span></label>
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Your Message <span>*</span></label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="agree-label">
                                            <input type="checkbox" id="chb1">
                                            <label for="chb1">
                                                Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                            </label>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                            Send Message <i class='bx bx-chevron-right'></i>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Form Area End -->

        <!-- Map Area -->
        <div class="map-area">
            <div class="container-fluid m-0 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50194.82376159623!2d-79.09792989247224!3d38.159337740034566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b4a08eb8621697%3A0xe5d6e4710a09b66e!2sStaunton%2C%20VA%2024401%2C%20USA!5e0!3m2!1sen!2sbd!4v1607173226867!5m2!1sen!2sbd" ></iframe>
            </div>
        </div>
        <!-- Map Area End -->

        <<!-- Footer File Link Start-->
        <?php
            include ('includes/footer.php');
        ?>
        <!-- End Footer File Link-->

        <!-- Color Switch Button -->
        <div class="switch-box">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <!-- Color Switch Button End -->

        <!-- Jquery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Wow Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/meanmenu.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
        
    </body>

<!-- Mirrored from templates.hibootstrap.com/techex/default/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 14:18:40 GMT -->
</html>