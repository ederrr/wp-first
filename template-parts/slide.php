<div class="slide-container">
	<?php

	$args = array(
		'type' => 'post',
		'posts_per_page' => 1,
	);

	$lastBlog = new WP_Query($args);														/* instancia uma copia do loop de posts */

	if($lastBlog->have_posts()):
		
		while ($lastBlog->have_posts()) : $lastBlog->the_post(  );?>
				<div class="slide-show">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				</div>
				<div class="slide-description">
					<h1><?php //the_title() ?></h1>
					<p><?php //the_excerpt() ?></p>
				</div>
				<button>Saiba Mais</button>
			
		<?php endwhile;endif;
		wp_reset_postdata(  );																/* Previne a alteração em outros loops */
	?>
	<div class="slide-navigation"><span class="slide-1"></span><span class="slide-2"></span><span class="slide-3"></span></div>
</div>