
<div id="post-<?php the_ID(); ?>" class="product-card-wrapper">
	<div class="product-card">
		<div class="product-img">
			<?php if ( has_post_thumbnail() ) : ?>
	      <?php the_post_thumbnail(); ?>
			<?php endif; ?>
		</div>
		<div class="product-section">
			<h3><?php the_title(); ?></h3>
			<div class="blurb">
				<?php the_content() ?>
			</div>
		</div>
	</div>
</div>
