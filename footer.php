
        <!-- Footer widget -->
        <div class="container-fluid footer_widget">
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="col-md-3">
                        <div class="footer_widger_company_details">
                            <!-- footer widget One -->
                            <?php dynamic_sidebar('footer_widget_one-sidebar'); ?>
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="footer_widget_quick_menu">
                        <!-- Footer Widget two -->
                            <?php dynamic_sidebar('footer_widget_two-sidebar'); ?>
                            <!-- <h3>Quick link</h3>
                            <ul>
                                <li><a href="">New Collection</a></li>
                                <li><a href="shop.html">All Shop</a></li>
                                <li><a href="">payment</a></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_widget_quick_menu">
                        <!-- footer Widget threee -->
                        <?php dynamic_sidebar('footer_widget_three-sidebar'); ?>
                            <!-- <h3>Pages</h3>
                            <ul>
                                <li>
                                    <a href="shop.html" class="footer_widget">Shop</a>
                                </li>
                                <li>
                                    <a href="">About</a>
                                </li>
                                <li>
                                    <a href="">Contact</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer_widget_right_site">
                            <div class="address">
                            <!-- footer Widget fore -->
                            <?php dynamic_sidebar('footer_widget_fore-sidebar'); ?>
                                <!-- <h3>Contact </h3>
                                <p>420 Monoharpur, Kayemkola Jhikargacha Jashore, khunla</p>
                                <p>Email: Ecommerce4093@shop.com</p>
                                <p>Contact no: 0170000000</p> -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div><hr>
        </div>
        <!-- Footer Widget End -->
    </div>
  
    <footer class="footer_widget">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-light h3">
                <?php global $gkecommerce; ?>

                    <?php if($gkecommerce['Social_icon']['1']) : ?>
                    <a href="<?php global $gkecommerce; echo $gkecommerce['Social_icon']['1']; ?>"><i class="fab fa-facebook-square"></i></a>
                    <?php endif; ?>
                    <?php if($gkecommerce['Social_icon']['2']) : ?>
                    <a href="<?php global $gkecommerce; echo $gkecommerce['Social_icon']['2']; ?>"><i class="fab fa-linkedin"></i></a>
                    <?php endif; ?>
                    <?php if($gkecommerce['Social_icon']['3']) : ?>
                    <a href="<?php global $gkecommerce; echo $gkecommerce['Social_icon']['3']; ?>"><i class="fab fa-instagram-square"></i></a>
                    <?php endif; ?>
                    <?php if($gkecommerce['Social_icon']['4']) : ?>
                    <a href="<?php global $gkecommerce; echo $gkecommerce['Social_icon']['4']; ?>"><i class="fab fa-twitter-square"></i></a>
                    <?php endif; ?>
                   <!-- <a href=""><i class="fab fa-linkedin"></i></a>
                   <a href=""><i class="fab fa-instagram-square"></i></a>
                   <a href=""><i class="fab fa-twitter-square"></i></a> -->
                
                </div>
                <div class="col-md-12 text-center p-2">
                <?php 
					global $gkecommerce;
					echo $gkecommerce['Copyright_text'];
				?>
                </div>
            </div>
            
        </div>
    </footer>
   
<script>
    var swiper = new Swiper('.swiper-container', {
    cssMode: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination'
    },
    mousewheel: true,
    keyboard: true,
    autoplay:true,
    autoplayTimeout:5000,
  });
</script>

    <?php wp_footer(); ?>
  </body>
</html>