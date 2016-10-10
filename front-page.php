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
    	<div class="hero">
        <?php echo wp_get_attachment_image(get_field('hero_image'), 'full', false, array( 'class' => '') ); ?>

        <div class="hero-text">
          <?php echo get_field('hero_text')?>
          <?php if(get_field('button_text')) { ?>
          <div class="hero-button">
            <a href="#"><?php echo get_field('button_text')?></a>
          </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

    <!-- Call To Action -->
    <?php if(get_field('call_to_action_image')) { ?>
      <div class="call-to-action">
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
    <?php } ?>


    <!-- Featured Content -->
    <?php
      if( have_rows('featured_content') ) { ?>
        <div class="featured-content">
            <?php while ( have_rows('featured_content') ) : the_row(); ?>
                <div class="featured-item">
                  <div class="featured-section">
                    <h3><?php echo the_sub_field('heading');?></h3>
                    <div class="featured-body">
                      <?php echo the_sub_field('body');?>
                    </div>
                    <div class="featured-button">
                      <a>
                        <?php echo the_sub_field('button_text');?>
                      </a>
                    </div>
                  </div>

                </div>
            <?php endwhile; ?>
        </div>
      <?php } ?>


      <!-- Hero Image -->
      <?php if(get_field('hero_2_image')) { ?>
      	<div class="hero hero-2">
          <?php echo wp_get_attachment_image(get_field('hero_2_image'), 'full', false, array( 'class' => '') ); ?>

          <div class="hero-text">
            <?php echo get_field('hero_2_text')?>
            <?php if(get_field('button_text')) { ?>
            <div class="hero-button">
              <a href="#"><?php echo get_field('button_2_text')?></a>
            </div>
            <?php } ?>
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

                  <div class="featured-thumbnail">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('medium');
                    } else if (get_sub_field('post_image') != '') { ?>
                      <?php echo wp_get_attachment_image(get_sub_field('post_image'), 'medium', false, array( 'class' => 'lazy-load') );?>
                    <?php
                    }?>
                  </div>
                  <div class="featured-post-content">
                    <div class="featured-title">
                      <?php the_title();?>
                    </div>
                    <div class="featured-description">
                      <?php the_excerpt() ?>
                    </div>
                    <div class="featured-button">
                      <a href="#">
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
