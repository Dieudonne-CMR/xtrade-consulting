<style type="text/css">
        @-webkit-keyframes clignotes 
                {
                    0% { outline: 10px solid <?=$couleur1_entreprise ?>; }
                    50% { outline: 2px solid <?=$couleur_entreprise2 ?>; }
                    100% { outline: 10px solid <?=$couleur2_entreprise ?>; }
                }
                
                #bouton_whatsapp{
                    position: fixed;
                    bottom: 5%;
                    left: 20px;
                    z-index:70;
                }

                
                #bouton_whatsapp div{
                width: 50px;
                height: 50px;
                background-color: black;
                background-size: cover;
                background-position: center;
                border-radius: 50%;
                animation: clignotes 1s infinite;
                

                /*-webkit-animation: clignote 1s infinite;  Safari 4.0 - 8.0 
                    animation: clignote 1s infinite;*/
                }

                #bouton_whatsapp div img{
                    width: 50px;
                    height: 50px;
                    position: relative;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    border-radius: 50%;
                }
    </style>
  
    <!-- <a id="bouton_whatsapp" href="https://wa.me/+237682465068"> -->
    <?php $message = "Bonjour! Je viens de visiter votre site. J'aimerais plus d'information sur vos services!" ; ?>
    
    <?php if(!empty($whatsapp) and $bouton_whatsapp=='oui'): ?>
        <a id="bouton_whatsapp" href="https://api.whatsapp.com/send/?phone=<?= $whatsapp ?>&text=<?php echo $message ?>">
            <div><img src="https://cdn-icons-png.flaticon.com/128/3670/3670025.png"></div>
        </a>
    <?php endif; ?>  
<!-- // fin du boutton whatsapp -->

<!-- Footer Area End -->
<footer class="footer-area footer-bg">
    <div class="container">
        <div class="footer-top pt-100 pb-70">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="<?= $lien_logo . $logo  ?>" class="logo-one" alt="Images">
                            </a>
                        </div>
                        <p>
                            <?=  $decription_entreprise ?>
                        </p>
                        <div class="footer-call-content">
                            <h3>Parlez à notre service d'assistance</h3>
                            <span><a href="tel:<?=  $telephone ?>"><?=  $telephone ?></a></span>
                            <i class='bx bx-headphone'></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget pl-2">
                        <h3>Services</h3>
                        <ul class="footer-list">
                            <?php
                                foreach (recup_services() as $key => $value): 
                                    if($key < 9):
                            ?>
                            <li>
                                <a href="service-details.html" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    <?php echo $value->nom ?>
                                </a>
                            </li> 
                            <?php
                                    else:
                                        break;
                                    endif;
                                endforeach;
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget pl-5">
                        <h3>Nos Article</h3>
                            <ul class="footer-blog">
                            <?php foreach(recup_article() as $keys=> $value): ?>
                                <?php if($keys<=2): ?>
                                <li>
                                    <a href="blog-details.html">
                                        <img src="<?= $url_image . $value->photo ?>" alt="Images">
                                    </a>
                                    <div class="content">
                                        <h3><a href="blog-details.html"><?=  strTextLent($value->titre,50) ?></a></h3>
                                        <span><?= data_date($value->date) ?></span>
                                    </div>
                                </li>
                                <?php else: break; endif; ?>
                            <?php endforeach; ?>

                            <?php /*<li>
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-img-footer2.jpg" alt="Images">
                                </a>
                                <div class="content">
                                    <h3><a href="blog-details.html">New Device Invention for Digital Platform</a></h3>
                                    <span>07 Dec 2024</span>
                                </div>
                            </li>

                            <li>
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/blog-img-footer3.jpg" alt="Images">
                                </a>
                                <div class="content">
                                    <h3><a href="blog-details.html">Business Strategy Make His Goal Acheive</a></h3>
                                    <span>10 Dec 2024</span>
                                </div>
                            </li> */?>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Newsletter</h3>
                        <p> notre mission est de vous accompagner dans la gestion efficace de votre comptabilité et fiscalité tout en vous apportant des solutions adaptées à vos besoins.</p>
                        <div class="newsletter-area">
                            <form class="newsletter-form" data-toggle="validator" method="POST">
                                <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
                                <button class="subscribe-btn" type="submit">
                                    <i class='bx bxs-paper-plane' ></i>
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copy-right-area">
            <div class="copy-right-text">
                <p>
                    Copyright © <script>document.write(new Date().getFullYear())</script> Xtrade Consulting Goupe Sarl. Réaliser par  
                    <a href="https://akilaweb.net" target="_blank">akila web</a> 
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->