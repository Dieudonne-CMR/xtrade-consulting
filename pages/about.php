<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.hibootstrap.com/techex/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 14:17:59 GMT -->
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
                    <h3>A Propos de Nous !</h3>
                    <ul>
                        <li>
                            <a href="home">Accueil</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>A Propos</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- About Area -->
        <div class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-play">
                            <img src="<?= affichage_img( $image_banniere , $image_about)  ?>" alt="About Images">
                            <?php /*<div class="about-play-content">
                                <span>Watch Our Intro Video</span>
                                <h2>Perfect Solution for It Services!</h2>
                                <div class="play-on-area">
                                    <a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-on popup-btn"><i class='bx bx-play'></i></a>
                                </div> 
                            </div> */?>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content ml-25">
                            <div class="section-title">
                                <span class="sp-color2">Apropos de nous !</span>
                                <?php /*<h2>Right Partner for Software Innovation</h2>
                                <p>
                                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.
                                </p> */?>
                                 <?= $apropos_de_lentreprise ?>
                            </div>
                            <?php /*<div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul class="about-list text-start">
                                        <li><i class='bx bxs-check-circle'></i>Cost of Supplies and Equipment</li>
                                        <li><i class='bx bxs-check-circle'></i>Bribed Autor Nisi Elit Volume</li>
                                        <li><i class='bx bxs-check-circle'></i>Cost of Supplies and Equipment</li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <ul class="about-list about-list-2 text-start">
                                        <li><i class='bx bxs-check-circle'></i>Change the Volume of Expected</li>
                                        <li><i class='bx bxs-check-circle'></i>Easy to Customer Services</li>
                                        <li><i class='bx bxs-check-circle'></i>Good Quality Products Services</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="about-content-text">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p> */?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->

        <!-- Choose Area -->
        <div class="choose-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="choose-content mr-20">
                            <div class="section-title">
                                <span class="sp-color1">Pourquoi choisir ?</span>
                                <h2><?= $motivation_titre ?>.</h2>
                                <p>
                                <?= $motivation_desription ?>
                                </p>
                            </div>
                            <?php /*<div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="choose-content-card">
                                        <div class="content">
                                            <i class="flaticon-practice"></i>
                                            <h3>Experience</h3>
                                        </div>
                                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p>
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-6">
                                    <div class="choose-content-card">
                                        <div class="content">
                                            <i class="flaticon-help"></i>
                                            <h3>Quick Support</h3>
                                        </div>
                                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p>
                                    </div>
                                </div>
                            </div> */?>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-img">
                            <img src="<?= $motivation_img ?>" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Choose Area End -->

        <!-- Security Area -->
        <div class="security-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Ameliorer vos competances</span>
                    <h2><?= $titre_s ?></h2>
                </div>

                <div class="row pt-45">

                    <div class="col-lg-4 col-sm-6">
                        <div class="security-card">
                            <i class="flaticon-cyber-security"></i>
                            <h3><a href="javascript:void(0)"><?= $titre_s1 ?></a></h3>
                            <p><?= $discription_s1 ?></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-6">
                        <div class="security-card">
                            <i class="flaticon-computer"></i>
                            <h3><a href="javascript:void(0)"><?= $titre_s2 ?></a></h3>
                            <p><?= $description_s2 ?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="security-card">
                            <i class="flaticon-computer"></i>
                            <h3><a href="javascript:void(0)"><?= $titre_s3 ?></a></h3>
                            <p><?= $description_s3 ?></p>
                        </div>
                    </div>

                    <?php /*<div class="col-lg-4 col-sm-6">
                        <div class="security-card">
                            <i class="flaticon-implement"></i>
                            <h3><a href="case-details.html">Analytic Solution</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="security-card">
                            <i class="flaticon-consulting"></i>
                            <h3><a href="case-details.html">Finest Quality</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="security-card">
                            <i class="flaticon-consultant"></i>
                            <h3><a href="case-details.html">Risk Management</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
                        </div>
                    </div> */?>

                </div>
            </div>
        </div>
        <!-- Security Area End -->

        <!-- Brand Area -->
        <?php if(!empty($partenaire)): ?>
        <div class="brand-area-two ptb-100">
            <div class="container">
                <div class="brand-slider owl-carousel owl-theme">
                    <?php foreach($partenaire as $value): ?>
                        <div class="brand-item">
                            <img src="<?= $logo_partenaire . $value->logo?>" alt="Images">
                        </div>
                    <?php endforeach; ?>

                    <?php /*<div class="brand-item">
                        <img src="assets/images/brand-logo/brand-style2.png" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-style3.png" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-style4.png" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-style5.png" alt="Images">
                    </div>
                    <div class="brand-item">
                        <img src="assets/images/brand-logo/brand-style3.png" alt="Images">
                    </div> */?>

                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- Brand Area End -->

        <!-- Counter Area -->
        <div class="counter-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Les chiffres parlent</span>
                    <h2>Vérifions la croissance et la réussite de notre entreprise</h2>
                    <p>La croissance et la réussite de votre entreprise dépendent de stratégies bien pensées et d’une gestion efficace. nous vous aidons à structurer vos finances, optimiser votre fiscalité et renforcer vos compétences pour un développement durable. Ensemble, analysons vos performances et saisissons de nouvelles opportunités pour propulser votre activité vers le succès </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-another-content">
                            <i class="flaticon-web-development"></i>
                            <h3><?= $mention1?></h3>
                            <span><?= $mention_titre1 ?></span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-another-content">
                            <i class="flaticon-consulting-1"></i>
                            <h3><?= $mention2?></h3>
                            <span><?= $mention_titre2 ?></span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-another-content">
                            <i class="flaticon-startup"></i>
                            <h3><?= $mention3?></h3>
                            <span><?= $mention_titre3 ?></span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="counter-another-content">
                            <i class="flaticon-tick"></i>
                            <h3><?= $mention4?></h3>
                            <span><?= $mention_titre4 ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="counter-shape">
                <div class="shape1">
                    <img src="assets/images/shape/shape1.png" alt="Images">
                </div>
                <div class="shape2">
                    <img src="assets/images/shape/shape2.png" alt="Images">
                </div>
            </div>
        </div>
        <!-- Counter Area End -->

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

<!-- Mirrored from templates.hibootstrap.com/techex/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 14:18:01 GMT -->
</html>