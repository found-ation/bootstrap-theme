<?php 
get_header();
?>
<style>.date_holder{right:25px;}</style>

       <div class="content_wrapper">
       <div class="container body_content py-5">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>              
          <div class="row mt-5">            
            <div class="col-md-6">
          <a href="#">
            <span class="thumbnail"><?php the_post_thumbnail(); ?></span>
            <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>
          </a>
        </div>
        <div class="col-md-6">
          <h3><?php the_title(); ?></h3>
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),40);
          } ?>
          <a class="btn btn-primary mt-3" href="<?php the_permalink() ?>">View Document</a>
        </div>
      </div>
      <?php endwhile;
                     
      foundation_pagination();             

      endif; ?>      
    </div>

   

  </div>
    <!-- /.container -->

<?php get_footer(); ?>