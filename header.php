<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head();?>
</head>

<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand">
      <?php if( has_custom_logo() ) { 
		  the_custom_logo();
			} else { ?>
		  <li class="menu-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
		<?php } ?>
      </a>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
		if ( has_nav_menu( 'left' ) ) {

			wp_nav_menu(
				array(
					'container'  => '',
					'items_wrap' => '%3$s',
					'theme_location' => 'left',
					)
				);

			} elseif ( ! has_nav_menu( 'expanded' ) ) {

				wp_list_pages(
					array(
					'match_menu_classes' => true,
					'show_sub_menu_icons' => true,
				    'title_li' => false,
					)
				);

			}
		?> 
        </ul>
      </div>
    </div>
  </nav>   