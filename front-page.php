<?php get_header(); ?>

    <div class="body_content">
    <?php 
    $homepageEvents = new WP_Query(array(
    'posts_per_page' => 1,
    'post_type' => 'news'
    ));
    while($homepageEvents->have_posts()) {
    $homepageEvents->the_post(); ?>
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2"><?php the_title(); ?></h1>
          <p class="lead mb-5 text-white-50">
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),33);
          } ?>
          </p>
        </div>
      </div>
    </div>
  </header>
  <?php } ?>


<div class="container">

    <div class="row">
        <?php 
        $homepageEvents = new WP_Query(array(
        'posts_per_page' => 1,
        'post_type' => 'post'
        ));
        while($homepageEvents->have_posts()) {
        $homepageEvents->the_post(); ?>
      <div class="col-md-8 mb-5">
        <h2><?php the_title(); ?></h2>
        <hr>
        <p>
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),37);
          } ?>
        </p>
        <a class="btn btn-primary btn-lg" href="<?php the_permalink() ?>">Discover more <i class="fas fa-angle-double-right"></i></a>
      </div>
      <?php } ?>
      <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
        <hr>
        <address>
          <strong>iDeviceUK C.I.C.</strong>
          <br>Suite 4053, Chynoweth House,
          <br>Trevissome Park, Truro,
          <br>Cornwall, TR4 8UN
          <br>
        </address>
        <address>
          <abbr title="Phone">P:</abbr>
          +44 (0)1206 645055
          <br>
          <abbr title="Email">E:</abbr>
          <a href="mailto:info@leemiller.club">info@leemiller.club</a>
        </address>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <?php 
        $homepageEvents = new WP_Query(array(
        'posts_per_page' => 6,
        'post_type' => 'portfolio'
        ));
        while($homepageEvents->have_posts()) {
        $homepageEvents->the_post(); ?>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <span class="card-img-top"><?php the_post_thumbnail(); ?></span>
          <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>
          <div class="card-body">
            <h4 class="card-title"><?php the_title(); ?></h4>
            <p class="card-text">
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),20);
          } ?>
            </p>
          </div>
          <div class="card-footer">
            <a href="<?php the_permalink() ?>" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
          <?php } ?>  
    <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5">
         <div class="card text-white bg-danger my-5 py-4 text-center">
            <div class="card-body">
              <p class="text-white m-0">Looking for professional advice, you've come to the right place, view our documentation section.</p>
            </div>
         </div>
      </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>

        <div class="container">
          <div class="row">
            <?php 
            $homepageEvents = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type' => 'documents'
            ));
            while($homepageEvents->have_posts()) {
            $homepageEvents->the_post(); ?>            
        <div class="col-md-12 mb-5">
        <div class="card mb-4">
          <span class="card-img-top"><?php the_post_thumbnail(); ?></span>
          <div class="date_holder"><span class="day"><?php the_time('j'); ?></span><span class="month"><?php the_time('F'); ?></span></div>
          <div class="card-body">
            <h2 class="card-title"><?php the_title(); ?></h2>
            <p class="card-text">
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),40);
          } ?>
            </p>
            <a href="<?php the_permalink() ?>" class="btn btn-primary">Read More <i class="fas fa-angle-right"></i></a>
          </div>
          <div class="card-footer text-muted">Posted by <?php echo get_the_author(); ?></a></div>
        </div>
      </div>
        <?php } ?>

      </div>
    </div>

   <section class="bg-dark py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Download Themes</h1>
          <p class="lead mb-5 text-white-50">Grab some free stuff while you're here!</p>
          <button type="button" class="btn btn-outline-light">View products</button>
        </div>
      </div>
    </div>
   </section>



   <div class="container">
     <div class="row">
    <?php 
      $homepageEvents = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'reviews'
      ));
          while($homepageEvents->have_posts()) {
            $homepageEvents->the_post(); ?>
  <div class="col-md-4 mb-5">
    <div class="card">
      <div class="card-body text-center p-5">
        <h3 class="display-4  text-info"><strong><?php the_title(); ?><strong></strong></strong></h3>
        <p class="lead mb-2">
          <?php if (has_excerpt()) {
          the_excerpt();
          } else {
          echo wp_trim_words(get_the_content(),20);
          } ?>
        </p>
        <a href="<?php the_permalink() ?>" class="btn btn-xs btn-round btn-lg btn-info bgd-gradient-blue  btn-rised ml-md-4 mt-md-4">More <i class="fas fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
</div>


<?php get_footer(); ?>