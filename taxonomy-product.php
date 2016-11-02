<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ukrops
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		$queried_object = get_queried_object();
		$taxonomy = $queried_object->taxonomy;
		$term_id = $queried_object->term_id;
		$image = get_field('hero_image', $taxonomy . '_' . $term_id);
		$body = get_field('hero_body', $taxonomy . '_' . $term_id);
		$heading = get_field('hero_heading', $taxonomy . '_' . $term_id);
		?>

    <!-- Hero Image -->
    <?php if($image){ ?>
    <div class="whr-products-hero">
      <div class="container-fluid">
        <div class="hero-text">
          <h2><?php echo $heading ?></h2>
          <h3><?php echo $body; ?></h3>
        </div>
        <div class="hero-img">
          <?php echo wp_get_attachment_image($image, 'full', false, array( 'class' => '') ); ?>
        </div>
      </div>
    </div>
    <?php }?>

		<div class="container-fluid">
			<div class="product-list">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();

						get_template_part( 'product-card', get_post_format());

					endwhile;
				endif; ?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
