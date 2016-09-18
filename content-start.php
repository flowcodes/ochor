<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div class="col-xs-12 col-sm-6 col-md-4">
          <article id="post-<?php the_ID(); ?>" class="teaser teaser-news">
            <div class="row">
              <div class="col-xs-5 col-sm-12">
                <a href="#">
									<?php
										// Post thumbnail.
										twentyfifteen_post_thumbnail();
									?>
                </a>
              </div>
              <div class="col-xs-7 col-sm-12">
                <div class="inner">
									<?php the_title( sprintf( '<h1 class="h4"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
                  <p><time><?php the_time('j. M Y'); ?></time></p>
                  <p>
                    <?php the_excerpt() ?>
                  </p>
                </div>
              </div>
            </div>
          </article>
        </div>

</article><!-- #post-## -->
