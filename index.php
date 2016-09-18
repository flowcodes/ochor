<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<main id="main">

	<section id="hero" style="background-image:url('<?php header_image(); ?>')">
    <div id="hero-inner">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <article id="intro">
              <a href="<?php bloginfo( 'url' ); ?>/<?php echo get_theme_mod( 'header_link' ); ?>">
                <h1><?php echo get_theme_mod( 'header_title' ); ?></h1>
                <p class="lead"><?php echo get_theme_mod( 'header_subtitle' ); ?></p>
              </a>
            </article>
          </div>
          <div class="col-md-5">

            <div id="featured">
              <article class="teaser teaser-news">
                <div class="row">
                  <div class="col-xs-5">
                    <a href="#">
                      <img src="img/news.jpg" alt="" class="img-responsive" />
                    </a>
                  </div>
                  <div class="col-xs-7">
                    <div class="inner">
                      <time>3. Okt 2016</time>
                      <h1 class="h4">
                        <a href="#">Nulla vitae elit libero, a pharetra augue.</a>
                      </h1>
                    </div>
                  </div>
                </div>
              </article>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

	<section id="news-latest">
    <div class="container">
      <div class="row">

				<?php if ( have_posts() ) : ?>

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'start' );

					// End the loop.
					endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
						'next_text'          => __( 'Next page', 'twentyfifteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
					) );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );

				endif;
				?>

      </div>
    </div>
  </section>



</main>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
