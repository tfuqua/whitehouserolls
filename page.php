<?php

get_header(); ?>

  <div id="primary" class="content-area">
		<main id="main" class="site-main whr-page" role="main">

      <!-- Hero Image -->
      <?php if (get_field('hero_image')){
      $background = wp_get_attachment_image_src(get_field('hero_background_image'), 'full', false); ?>
      <div class="page-hero" style="background-image: url('<?php echo $background[0] ?>');">
        <div class="hero-text">
          <div class="page-title">
            <h2><?php while ( have_posts() ) : the_post(); the_title(); endwhile; // End of the loop.?></h2>
          </div>

          <?php if(get_field('hero_heading')) { ?>
          <div class="hero-heading">
      	    <h3>
                <?php echo get_field('hero_heading'); ?>
            </h3>
          </div>
          <?php }?>
        </div>
        <?php if(get_field('hero_image')) { ?>
          <div class="hero-img">
            <?php echo wp_get_attachment_image(get_field('hero_image'), 'full', false, array( 'class' => '') ); ?>
          </div>
        <?php } ?>
      </div>
      <?php } else { ?>
        <div class="container-fluid">
          <h2><?php while ( have_posts() ) : the_post(); the_title(); endwhile; // End of the loop.?></h2>
        </div>
      <?php
      } ?>

      <!-- Main Content -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
    				<?php
    				while ( have_posts() ) : the_post();

      				the_content();
      				wp_link_pages( array(
      					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ukrops' ),
      					'after'  => '</div>',
      				));

            endwhile;
      			?>
          </div>
        </div>
      </div>

      <!-- extra content -->
     <?php if(get_field('full_width_content')) { ?>
       <div class="full-width-content">
        <?php echo get_field('full_width_content') ?>
       </div>
      <?php } ?>

      <!-- extra content -->
     <?php if(get_field('extra_content')) { ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <?php echo get_field('extra_content') ?>
          </div>
        </div>
      </div>
      <?php } ?>


		</main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();

?>
