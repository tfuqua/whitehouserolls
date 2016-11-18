<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ukrops
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <!-- Hero Image -->
    <?php if(get_field('hero_image')) { ?>
      <?php $background = wp_get_attachment_image_src(get_field('hero_image'), 'full', false); ?>
	     <div class="hero hero-1" style="background-image: url('<?php echo $background[0] ?>');">
        <div class="hero-text-wrapper">
          <div>
            <div class="hero-text">
              <?php echo get_field('hero_text')?>
              <div class="extra-img">
                <?php echo wp_get_attachment_image(get_field('extra_image'), 'full', false, array( 'class' => '') ); ?>
              </div>
              <?php if(get_field('button_text')) { ?>
              <div class="hero-button">
                <a class="button" href="<?php echo get_field('button_link')?>"><?php echo get_field('button_text')?></a>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

    <!-- Call To Action -->
    <?php if(get_field('call_to_action_image')) { ?>
      <div class="call-to-action">
        <div class="container-fluid">
          <div class="call-to-action-img animate">
            <?php echo wp_get_attachment_image(get_field('call_to_action_image'), 'full', false, array( 'class' => '') ); ?>
          </div>
          <div class="call-to-action-content">
              <h3><?php echo get_field('call_to_action_heading')?></h3>
              <div>
                <?php echo get_field('call_to_action_body')?>
              </div>
          </div>
        </div>
      </div>
    <?php } ?>


    <!-- Featured Content -->
    <?php
      if( have_rows('featured_content') ) { ?>
        <div class="featured-content-wrapper">
          <div class="container-fluid">
            <?php while ( have_rows('featured_content') ) : the_row(); ?>
                <div class="featured-item">
                  <div class="featured-section">
                    <div class="flex">
                      <h3><?php echo the_sub_field('heading');?></h3>
                      <div class="featured-body">
                        <?php echo the_sub_field('body');?>
                      </div>
                      <div>
                        <a class="button" href="  <?php echo the_sub_field('button_link');?>">
                          <?php echo the_sub_field('button_text');?>
                        </a>
                      </div>
                    </div>
                    <?php if(get_sub_field('image')) { ?>
                    <div class="img-wrapper flex">
                      <?php echo wp_get_attachment_image(get_sub_field('image'), 'medium', false, array( 'class' => 'lazy-load'));?>
                    </div>
                   <?php } ?>
                  </div>
                </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php } ?>


      <!-- Hero Image -->
      <?php if(get_field('hero_2_image')) { ?>
      	<div class="hero hero-2">
          <div class="container-fluid">
            <div class="hero-img-wrapper">
              <?php echo wp_get_attachment_image(get_field('hero_2_image'), 'full', false, array( 'class' => 'rocker') ); ?>
            </div>
            <div class="hero-text">
              <h3>
                <?php echo get_field('hero_header')?>
              </h3>
              <div>
                <?php echo get_field('hero_2_text')?>
              </div>
              <?php if(get_field('button_2_text')) { ?>
              <div class="hero-button">
                <a href="<?php echo get_field('button_2_link')?>"><?php echo get_field('button_2_text')?></a>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php } ?>


    <!-- Featured Posts -->
    <?php

      if( have_rows('featured_posts') ) { ?>
        <div class="featured-posts-wrapper">
          <div class="featured-posts">
            <?php while (have_rows('featured_posts') ) : the_row(); ?>
              <div class="featured-post">
                <?php $post_object = get_sub_field('featured_post');
                if( $post_object ):
                  $post = $post_object;
                  setup_postdata( $post ); ?>

                  <?php
              			$background = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', false);
              		?>
              		<div class="featured-thumbnail" style="background-image: url('<?php echo $background[0] ?>');">
              		</div>

                  <div class="featured-post-content">
                    <div class="featured-title">
                      <?php the_title();?>
                    </div>
                    <div class="featured-description">
                      <?php echo excerpt('30'); ?>
                    </div>
                    <div>
                      <br />
                      <a class="button" href="#">
                        <?php echo the_sub_field('button_text') ?>
                      </a>
                    </div>
                  </div>
                  <?php wp_reset_postdata();
                  endif; ?>
              </div>
          <?php endwhile; ?>
          </div>
        </div>
    <?php } ?>


  </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
