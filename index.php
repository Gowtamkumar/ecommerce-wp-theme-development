<?php
    get_header();

    /*
        Template Name: Blog
    */
?>
<?php
    get_header();
?>
    <!-- Header End -->
    <div class="main-contant">
     <div class="container-fluid">
         <div class="container">
             <div class="row pt-5">
                 <div class="col-md-8">
                     <?php while(have_posts()) : the_post() ?>
                            <h3><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a> </h3>
                            <?php the_post_thumbnail();?>
                            <p>[By
                                <a href="<?php the_author(); ?>">Author</a> On
                                <a href="<?php the_time('F'); ?>"><?php the_time('F'); ?></a>
                                <a href="<?php the_time('D'); ?>"><?php the_time('D'); ?></a>
                                <a href="<?php the_time('Y'); ?>"><?php the_time('Y'); ?>]</a>
                                <?php comments_popup_link(); ?>
                            </p>
                            <a href='<?php the_category(); ?>'><?php the_category(); ?></a>
                        <p class="text-justify"> <?php the_content(); ?><a href="<?php the_permalink( ); ?>">read more..</a></p>
                    <?php endwhile ?>
                    </div>
                 <div class="col-md-4">
                     <div class="search">
                         <input type="text" name="" id="" placeholder="Search....">
                         <input type="submit" value="Search">
                     </div>
                     <div class="recent_post pt-3">
                        <?php dynamic_sidebar('Left-sidebar'); ?>
                     </div>
                     
                 </div>
             </div>
         </div>
     </div>
       <?php get_footer(); ?>