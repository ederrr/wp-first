<div class="slide-container">
	<?php

	$args = array(
		'type' => 'post',
		'posts_per_page' => 1,
	);

	$lastBlog = new WP_Query($args);														/* instancia uma copia do loop de posts */

	if($lastBlog->have_posts()):?>
		
		
		<div class="slide-show">
		<?php while ($lastBlog->have_posts()) : $lastBlog->the_post(  );?>
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
			<?php endwhile;
			wp_reset_postdata(  );	?>
			<div class="slide-navigation"><span class="slide-1"></span><span class="slide-2"></span><span class="slide-3"></span></div>
		</div>
		<div class="slide-description">
		<?php while ($lastBlog->have_posts()) : $lastBlog->the_post(  );?>
			<div class="description-container">
				<h1><?php the_title() ?></h1>
				<p><?php the_excerpt() ?></p>
				<a class="button-more" href="<?php the_permalink() ?>" >Saiba Mais</a>
			</div>
		<?php endwhile;
		wp_reset_postdata(  );?>
		</div>
				
	<?php endif;?>
</div>