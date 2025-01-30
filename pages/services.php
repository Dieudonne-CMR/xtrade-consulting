<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.hibootstrap.com/techex/default/services-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 14:18:29 GMT -->
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
                    <h3>Nos Services</h3>
                    <ul>
                        <li>
                            <a href="home">Accueil</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Services widget Area -->
        <section class="services-widget-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Nos Services</span>
                    <h2>We Provide a Wide Variety of It Services</h2>
                </div>
                <div class="row pt-45">
                    <?php foreach ($services as $value): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="service-details">
                                <img src="<?php echo $img_service.$value->image ?>" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-consultant"></i>
                                <?php /*<span><a href="service-details">IT Solution</a></span>*/?>
                                <h3><a href="service-details/<?= $value -> matricule_service ?>"><?php echo $value->nom ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="pagination-area">
                            <a href="services" class="prev page-numbers">
                                <i class='bx bx-left-arrow-alt'></i>
                            </a>

                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="services" class="page-numbers">2</a>
                            <a href="services" class="page-numbers">3</a>
                            
                            <a href="services" class="next page-numbers">
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services widget Area End -->

        <!-- Clients Area -->
        <section class="clients-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Nos Clients</span>
                    <h2>We are Trusted by 45+ Countries Worldwide</h2>
                </div>

                <div class="clients-slider owl-carousel owl-theme pt-45">
                    <div class="clients-content">
                        <div class="content">
                            <img src="assets/images/clients-img/clients-img1.jpg" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Jonthon Martin</h3>
                            <span>Manager of Company</span>
                        </div>
                        <p>
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                        </p>
                    </div>

                    <div class="clients-content">
                        <div class="content">
                            <img src="assets/images/clients-img/clients-img2.jpg" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Alin Decros</h3>
                            <span>CEO of HTM Company</span>
                        </div>
                        <p>
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                        </p>
                    </div>

                    <div class="clients-content">
                        <div class="content">
                            <img src="assets/images/clients-img/clients-img3.jpg" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Elen Musk</h3>
                            <span>CEO, MT Corporation</span>
                        </div>
                        <p>
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi loren accumsan ipsum velit.”
                        </p>
                    </div>
                </div>
            </div>

            <div class="client-circle">
                <div class="client-circle-1">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-2">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-3">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-4">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-5">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-6">
                    <div class="circle"></div>
                </div>
                <div class="client-circle-7">
                    <div class="circle"></div>
                </div>
            </div>
        </section>
        <!-- Clients Area End -->

        <!-- Brand Area -->
        <div class="brand-area ptb-100">
            <div class="container">
                <div class="brand-slider owl-carousel owl-theme">
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo1.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style1.png" class="brand-logo-two" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo2.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style2.png" class="brand-logo-two" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo3.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style3.png" class="brand-logo-two" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo4.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style4.png" class="brand-logo-two" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo5.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style5.png" class="brand-logo-two" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-logo3.png" class="brand-logo-one" alt="Images">
                        <img src="assets/images/brand-logo/brand-style3.png" class="brand-logo-two" alt="Images">
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->

        <!-- Footer File Link Start-->
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

<!-- Mirrored from templates.hibootstrap.com/techex/default/services-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 14:18:29 GMT -->
</html>