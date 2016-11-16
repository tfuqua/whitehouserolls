
<div id="post-<?php the_ID(); ?>" class="product-card-wrapper">
	<div class="product-card">
		<div class="product-img">
			<?php if ( has_post_thumbnail() ) : ?>
	      <?php the_post_thumbnail(); ?>
			<?php endif; ?>
		</div>

		<div class="product-section">
			<h3><?php the_title(); ?></h3>
		</div>
		<?php if(get_field('buy_link')){ ?>
			<div class="product-buttons">
				<a class="button" href="<?php echo get_field('buy_link');?>">Order Online</a>
			</div>
		<?php } ?>
	</div>
</div>
