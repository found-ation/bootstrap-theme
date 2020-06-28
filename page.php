<?php

/*
Template Name: Full-Width
Template Post Type: page
*/

get_header();
while( have_posts() ) {
    the_post();
    }
?>              
    <div class="row column mt2">
		<span class="thumbnail"><?php the_post_thumbnail(); ?></span>
			<?php
                if (is_single( array( '33', '', '' ))){
                dynamic_sidebar( 'content-1' );
                }
                ?>
			<h2 class="page-title"><?php the_title(); ?></h2>
			<small><strong>Written by: <?php echo get_the_author(); ?> on <?php the_time('j F Y'); ?></strong></small>
			<p><?php the_content();?></p>
			<?php
            if (is_single( array( '33', '', '' ))){
            dynamic_sidebar( 'content-2' );
            }
            ?>
    <hr class="foundationHr" />
			
	<?php comment_form(); ?>

    </div>



<?php get_footer(); ?>