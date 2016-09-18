<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">

				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Domine:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">

        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/modernizr-2.8.3.min.js"></script>

				<?php wp_head(); ?>
    </head>

</head>

<body <?php body_class(); ?>>


  <div id="header">
     <nav class="navbar navbar-default navbar-fixed-top">
       <div class="container">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
         </div>


        <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

          <?php if ( has_nav_menu( 'primary' ) ) : ?>
             <!-- Collect the nav links, forms, and other content for toggling -->
               <?php
                 wp_nav_menu( array(
                   'theme_location' => 'primary',
                   'container'      => '',
                   'menu_class'     => 'nav navbar-nav',
                  ) );
               ?>
          <?php endif; ?>

          <?php if ( has_nav_menu( 'social' ) ) : ?>
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'social',
                  'container'      => '',
                  'menu_class'     => 'nav navbar-nav',
                  'depth'          => 1,
                  'link_before'    => '<span class="screen-reader-text">',
                  'link_after'     => '</span>',
                ) );
              ?>
          <?php endif; ?>

          </div><!-- /.navbar-collapse -->

        <?php endif; ?>

       </div><!-- /.container-fluid -->
     </nav>
  </div>
