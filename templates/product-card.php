<?php
/* Template Name: Product Template */
?>

<div id="post-<?php the_ID(); ?>" class="product-card-wrapper">
	<div class="product-card">

		<?php
			$background = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', false);
		?>
		<div class="product-img" style="background-image: url('<?php echo $background[0] ?>');">
		</div>

		<div class="product-section">
			<h3><?php the_title(); ?></h3>

			<?php if(get_field('buy_link')){ ?>
				<div class="product-buttons">
					<a class="button" href="<?php echo get_field('buy_link');?>">Order Online</a>
				</div>
			<?php } ?>

		</div>
	</div>
</div>
