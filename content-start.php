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

  <div class="col-xs-12 col-md-4">
    <article id="post-<?php the_ID(); ?>" class="teaser teaser-news">
      <div class="row">
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="col-xs-5 col-md-12">
            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
          		<?php the_post_thumbnail( 'post-thumbnail' , array( 'alt' => get_the_title(), 'class' => 'img-responsive' ) ); ?>
          	</a>
          </div>
          <div class="col-xs-7 col-md-12">
        <?php else : ?>
          <div class="col-xs-12">
        <?php endif; ?>

            <div class="inner">
              <?php
              $kicker = get_post_meta($post->ID, 'kicker', true);
              if ( $kicker ) :
              ?>
              <p class="kicker">
                <?php echo $kicker; ?>
              </p>
              <?php endif; ?>
    					<?php the_title( sprintf( '<h1 class="h4"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
              <?php if ( has_post_thumbnail() == false ) : ?>
                <?php the_excerpt() ?>
              <?php endif; ?>
            </div>
          </div>

      </div>
    </article>
  </div>
