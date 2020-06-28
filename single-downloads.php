<?php

/*
Template Name: Full-Width
Template Post Type: downloads
*/

get_header();
while( have_posts() ) {
    the_post();
    }
?>  

       <div class="content_wrapper">
       <div class="container body_content py-5">
          <div class="row">
            <div class="col-md-12 mb-5">
		<span class="thumbnail"><?php the_post_thumbnail(); ?></span>
			<?php
                if (is_single( array( '', '', '' ))){
                dynamic_sidebar( 'content-1' );
                }
                ?>
			<h2 class="page-title mt-3"><?php the_title(); ?></h2>
			<small><strong>Written by: <?php echo get_the_author(); ?> on <?php the_time('j F Y'); ?></strong></small>
            <p><?php the_tags(); ?></p>
			<p><?php the_content();?></p>
			<?php
            if (is_single( array( '', '', '' ))){
            dynamic_sidebar( 'content-2' );
            }
            ?>
    <hr class="foundationHr" />
			
	<?php comment_form(); ?>

    </div>
</div>
</div>

    <!-- /front-page end -->
    </div>



<?php get_footer(); ?>