<?php 
//--- affiche les bannieres aleatoirement
$i=random_int(1,3);
if($i==1):
    $titre_banniere = $titre_banniere1;
    $description_baniere =$description_baniere1;
    $banniere= $banniere1;
elseif($i==2):
    $titre_banniere = $titre_banniere2;
    $description_baniere =$description_baniere2;
    $banniere= $banniere2;
else:
    $titre_banniere = $titre_banniere3;
    $description_baniere = $description_baniere3;
    $banniere= $banniere3;
endif;
//--- fin d'affiche les bannieres aleatoirement
?>
<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.hibootstrap.com/techex/default/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 14:16:58 GMT -->
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
        <title><?= $nom_entreprise ?></title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>
    <body>

        <!-- HeaderFile Link Start-->
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


        <!-- Banner Area Two -->
        <div class="banner-area-two">
            <div class="container-fluid">
                <div class="container-max">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="banner-content">
                                <h1><?= $titre_banniere ?></h1>
                                <p>
                                    <?= $description_baniere ?>
                                </p>
                                <div class="banner-btn">
                                    <a href="about" class="default-btn btn-bg-two border-radius-50">Lire plus <i class='bx bx-chevron-right'></i></a>
                                    <a href="contact" class="default-btn btn-bg-one border-radius-50 ml-20">Get A Quote <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img src="<?= affichage_img ($image_banniere, $banniere )?>" alt="Images" style="border-radius: 10px;">
                                <div class="banner-img-shape">
                                    <img src="assets/images/home-three/home-three-shape.png" alt="Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="banner-sub-slider owl-carousel owl-theme">
                    <div class="banner-sub-item">
                        <img src="assets/images/home-three/home-three-sub1.jpg" alt="Images">
                        <div class="content">
                            <h3><?= $mention1?></h3>
                            <span><?= $mention_titre1 ?></span>
                        </div>
                    </div>

                    <div class="banner-sub-item">
                        <img src="assets/images/home-three/home-three-sub2.jpg" alt="Images">
                        <div class="content">
                            <h3><?= $mention2?></h3>
                            <span><?= $mention_titre2 ?></span>
                        </div>
                    </div>

                    <div class="banner-sub-item">
                        <img src="assets/images/home-three/home-three-sub3.jpg" alt="Images">
                        <div class="content">
                            <h3><?= $mention3?></h3>
                            <span><?= $mention_titre3 ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area Two End -->

        <!-- About Area -->
        <div class="about-area about-bg pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img-2">
                            <img src="<?= affichage_img( $image_banniere , $image_about)  ?>" alt="About Images">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content-2 ml-20">
                            <div class="section-title">
                                <span class="sp-color1">About Us</span>
                                <?php /*<h2>Right Partner for Software Innovation</h2>
                                <p>
                                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                                    Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum auctor a ornare odio. 
                                </p> */?>
                                <?= $apropos_de_lentreprise ?>
                            </div>
                            <?php /*
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="about-card">
                                        <div class="content">
                                            <i class="flaticon-practice"></i>
                                            <h3>Experience</h3>
                                        </div>
                                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <div class="about-card">
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
                </div>
            </div>
        </div>
        <!-- About Area End -->

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

        <!-- Services Area Three -->
        <section class="services-area-three pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2"><?= $titre_service ?></span>
                    <h2><?= $titre_service ?></h2>
                </div>
                <div class="row pt-45">
                    <?php 
                    foreach ($services as $key => $value): 
                        if($key < 6): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <a href="service-details">
                                <img src="<?php echo affichage_img( $img_service, $value->image ) ?>" alt="Images">
                            </a>
                            <div class="content">
                                <i class="flaticon-consultant"></i>
                                <?php //<span><a href="service-details">IT Solution</a></span> ?>
                                <h3><a href="service-details"><?php echo $value->nom ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php 
                        else:
                            break;
                        endif;
                    endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Services Area Three End -->

        <!-- Build Area -->
        <?php /*<div class="build-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="build-content">
                            <div class="section-title">
                                <span>We Carry More Than Just Good Coding Skills</span>
                                <h2>Let's Build Your Website!</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="build-btn-area">
                            <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Contact Us <i class='bx bx-chevron-right'></i></a>
                        </div>
                    </div>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-12">
                        <div class="play-btn-area">
                            <a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="build-play popup-btn"><i class='bx bx-play'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> */?>
        <!-- Build Area End -->

          <!-- Talk Area -->
          <div class="talk-area ptb-100">
            <div class="container">
                <div class="talk-content text-center">
                    <div class="section-title text-center">
                        <span class="sp-color1">Parlons-en</span>
                        <h2>Chaque entreprise mérite un accompagnement de qualité.</h2>
                    </div>
                    <a href="contact" class="default-btn btn-bg-two border-radius-5">Nous Contact</a>
                </div>
            </div>
        </div>
        <!-- Talk Area End -->

        <!-- Case Study Area -->
        <div class="case-study-area pb-70" style="margin-top: 3rem;">
            <div class="container-fluid p-0">
                <div class="section-title text-center">
                    <span class="sp-color2">Formations</span>
                    <h2>Les formations que nous offrons</h2>
                </div>

                <div class="case-study-slider owl-carousel owl-theme pt-45">
                    <?php foreach($formation as $value): ?>
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="<?= $Lien_image_offres . $value->img_banniere ?>" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html"><?= $value->titre ?></a></h3>
                                <?php /*<ul>
                                    <li><a href="case-details.html">Business</a></li>
                                    <li><a href="case-details.html">Planing</a> </li>
                                </ul> */?>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                   <?php /*
                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study2.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Business Solution</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Business</a></li>
                                    <li><a href="case-details.html">Planing</a> </li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>

                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study3.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Business Solution</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Business</a></li>
                                    <li><a href="case-details.html">Planing</a> </li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>

                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study4.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">UI/UX Research</a></h3>
                                <ul>
                                    <li><a href="case-details.html">UI/UX Design</a></li>
                                    <li><a href="case-details.html">Research</a> </li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>

                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study6.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Business Solution</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Solution</a></li>
                                    <li><a href="case-details.html">Business</a> </li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>

                        <div class="case-study-item">
                            <a href="case-details.html">
                                <img src="assets/images/case-study/case-study2.jpg" alt="Images">
                            </a>
                            <div class="content">
                                <h3><a href="case-details.html">Web Development</a></h3>
                                <ul>
                                    <li><a href="case-details.html">Design</a></li>
                                    <li><a href="case-details.html">Development</a> </li>
                                </ul>
                                <a href="case-details.html" class="more-btn"><i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div> 
                    */?>
                </div>
            </div>
        </div>
        <!-- Case Study Area End -->


        <!-- Technology Area Two -->
        <?php /*<section class="technology-area-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Technology Index</span>
                    <h2>We Deliver Our Best Solution With The Goal of Trusting</h2>
                </div>
 
                <div class="row pt-45">
                    <div class="col-lg-2 col-6">
                        <div class="technology-card technology-card-color">
                            <i class="flaticon-android"></i>
                            <h3>Android</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6">
                        <div class="technology-card technology-card-color">
                            <i class="flaticon-website"></i>
                            <h3>Web</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6">
                        <div class="technology-card technology-card-color">
                            <i class="flaticon-apple"></i>
                            <h3>ios</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6">
                        <div class="technology-card technology-card-color">
                            <i class="flaticon-television"></i>
                            <h3>TV</h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6">
                        <div class="technology-card technology-card-color">
                            <i class="flaticon-smartwatch"></i>
                            <h3>Watch </h3>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6">
                        <div class="technology-card technology-card-color">
                            <i class="flaticon-cyber-security"></i>
                            <h3>IOT</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section> */?>
        <!-- Technology Area Two End -->

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

        <!-- Clients Area -->
        <section class="clients-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Nos Clients</span>
                    <h2>Rétroaction du client et etudiants</h2>
                </div>

                <div class="clients-slider owl-carousel owl-theme pt-45">
                    <div class="clients-content">
                        <div class="content">
                            <img src="https://cdn-icons-png.flaticon.com/128/16683/16683419.png" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Marc T.</h3>
                            <span>Entrepreneur</span>
                        </div>
                        <p>
                            “Grâce à Xtrade Consulting Groupe Sarl, j’ai pu structurer ma comptabilité et optimiser ma gestion fiscale. Leur équipe m’a guidé à chaque étape, et aujourd’hui, je gère mon entreprise avec plus de sérénité. Un partenaire indispensable pour toute entreprise !”
                        </p>
                    </div>

                    <div class="clients-content">
                        <div class="content">
                            <img src="https://cdn-icons-png.flaticon.com/128/16683/16683419.png" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Sandrine B.</h3>
                            <span>Gérante de PME</span>
                        </div>
                        <p>
                            “J’ai suivi une formation en fiscalité avec Xtrade Consulting, et cela a complètement changé ma façon de gérer mon entreprise. J’ai appris à mieux comprendre les déclarations fiscales et à éviter les erreurs coûteuses. Une formation claire, pratique et enrichissante !”
                        </p>
                    </div>

                    <div class="clients-content">
                        <div class="content">
                            <img src="https://cdn-icons-png.flaticon.com/128/16683/16683419.png" alt="Images">
                            <i class='bx bxs-quote-alt-left'></i>
                            <h3>Jean-Luc M.</h3>
                            <span>Comptable indépendant</span>
                        </div>
                        <p>
                            “Les conseils et l’accompagnement de Xtrade Consulting m’ont permis d’améliorer mes compétences et d’offrir un meilleur service à mes clients. Leur expertise est un vrai atout pour tous ceux qui veulent exceller en comptabilité et fiscalité.”
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

        <!-- Blog Area -->
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color2">Articles Recent</span>
                    <h2>Nos derniers articles</h2>
                </div>

                <div class="row pt-45">

                <?php foreach($obj_tous_post as $value): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details">
                                    <img src="<?= $url_image . $value->photo ?>" alt="Blog Images">
                                </a>
                                <div class="blog-tag">
                                    <h3><?= data_date($value->date,2) ?></h3>
                                    <span><?= data_date($value->date,1) ?></span>
                                </div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="home"><i class='bx bxs-user'></i> <?= info_admin($value->matricule_admin)->nom ?></a>
                                    </li>
                                    <li>
                                        <a href="home"><i class='bx bx-purchase-tag-alt'></i>Business</a>
                                    </li>
                                </ul>

                                <h3>
                                    <a href="blog-details"><?= $value->titre ?></a>
                                </h3>
                                <p><?= strTextLent($value->content , 75) ?></p>
                                <a href="blog-details" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>

                    <?php /*
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details">
                                    <img src="assets/images/blog/blog-img2.jpg" alt="Blog Images">
                                </a>
                                <div class="blog-tag">
                                    <h3>14</h3>
                                    <span>Dec</span>
                                </div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="home"><i class='bx bxs-user'></i> By Admin</a>
                                    </li>
                                    <li>
                                        <a href="home"><i class='bx bx-purchase-tag-alt'></i>Invention</a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details">New Device Invention for Digital Platform</a>
                                </h3>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                <a href="blog-details" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details">
                                    <img src="assets/images/blog/blog-img3.jpg" alt="Blog Images">
                                </a>
                                <div class="blog-tag">
                                    <h3>17</h3>
                                    <span>Dec</span>
                                </div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="home"><i class='bx bxs-user'></i> By Admin</a>
                                    </li>
                                    <li>
                                        <a href="home"><i class='bx bx-purchase-tag-alt'></i>Achive</a>
                                    </li>
                                </ul>

                                <h3>
                                    <a href="blog-details">Business Strategy Make His Goal Acheive </a>
                                </h3>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                <a href="blog-details" class="read-btn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div> */?>

                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        
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

<!-- Mirrored from templates.hibootstrap.com/techex/default/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2025 14:17:03 GMT -->
</html>