
<?php
    get_header();
?>
    <!-- Header End -->
    <div class="main-contant">
     <div class="container-fluid">
         <div class="container">
             <div class="row pt-5">
                 <div class="col-md-12">
                     <?php while(have_posts()) : the_post() ?>

                        <h3><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a> </h3>
                        <?php the_post_thumbnail();?>
                        
                        <p class="text-justify"> <?php the_content(); ?></p>
                    <?php endwhile ?>
                    </div>
                 
             </div>
         </div>
     </div>
       <?php get_footer(); ?>