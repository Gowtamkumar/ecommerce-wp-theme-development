<?php
    get_header();

    /*
        Template Name: Home
    */
?>
    <div class="main-contant">
       <div class="container-fluid Header_slider">
           <div class="row text-center">
               <div class="col-md-12 bg-gray">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php 
                            $sliderGkecommer= new WP_Query(array(
                                'post_type'=>'GkEcommerceSlider',
                                'posts_per_page'=> -1
                            ) );

                            while($sliderGkecommer->have_posts()): $sliderGkecommer->the_post(); ?>
                                <div class="swiper-slide"> 
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endwhile; ?>
                    
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
               </div>
           </div>
       </div>
      
       <!-- product Category -->
       <div class="container-fluid pb-2 pt-5">
           <div class="container">
            <h3>All Brand</h3>
               <div class="row p-2 text-center">
                   <div class="col-md-12 p-2">
                        <div class="product_category bg-light">
                                <?php echo do_shortcode('[product_categories]')?>
                        </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- product category end -->

       <div class="container-fluid  categorey_product_section pb-4">
           <div class="container">
                <h1 class="p-3">
                    <h3>Best Selling</h3>
                </h1>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?php echo do_shortcode('[products limit="8" columns="5" category="Uncategorized" cat_operator="NOT IN"]') ;?>
                    </div>
                </div>
           </div>
       </div>

       <div class="container-fluid pb-4">
        <div class="container">
             <h1 class="p-3">
                 <h3>Beauty & Bodycare</h3>
             </h1>
             <div class="row">
                <div class="col-md-12 text-center">
                    <?php echo do_shortcode('[products limit="8" columns="5" category="bag" cat_operator="NOT IN"]') ;?>
                </div>
               
             </div>
        </div>
    </div>
    <div class="container-fluid categorey_product_section pb-4">
        <div class="container">
             <h1 class="p-3">
                 <h3>Books & Stationery</h3>
                
             </h1>
             <div class="row">
                <div class="col-md-12 text-center">
                    <?php echo do_shortcode('[products limit="8" columns="5" category="new_product" cat_operator="NOT IN"]') ;?>
                </div>
             </div>
        </div>
    </div>
       <div class="container-fluid text-center">
           <div class="container">
                <div class="row">
                    <?php 
                       $trusteOption = new WP_Query(array(
                            'post_type' => 'trusted',
                            'Posts_per_page'=>  4
                        ))
                    ?>

                        <?php while($trusteOption->have_posts()) : $trusteOption->the_post(); ?>
                        <div class="col-md-3">
                            <div class="delivery ml-3">
                                <?php the_post_thumbnail()?>
                                <p><?php the_title(); ?></p>
                            </div>
                        </div>
                       <?php endwhile; ?>


                    <!-- <div class="col-md-3">
                        <div class="delivery">
                            <i class="fas fa-shipping-fast"></i>
                            <p>7 Days Return</p>
                        </div>
                        
                    </div> -->
                    <!-- <div class="col-md-3">
                        <div class="delivery">
                            <i class="fas fa-shipping-fast"></i>
                            <p>24/7 Support</p>
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                        <div class="delivery">
                            <i class="fas fa-shipping-fast"></i>
                            <p>Gift Services</p>
                        </div>
                        
                    </div> -->
                </div>
           </div>
        </div>
        <!-- Footer widget -->
       <?php get_footer(); ?>