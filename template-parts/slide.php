<div class="slide-container">
	<?php

	$args = array(
		'type' => 'post',
		'posts_per_page' => 3,
	);

	$lastBlog = new WP_Query($args);														/* instancia uma copia do loop de posts */

	if($lastBlog->have_posts()):
		
		while ($lastBlog->have_posts()) : $lastBlog->the_post(  );?>
			<h1><?php the_title() ?></h1>
			<p><?php the_excerpt() ?></p>
		<?php endwhile; else: ?>
	<div class="article">
		<p>Lamentamos mas não foram encontrados artigos.</p>
	</div>
	<?php endif;
		wp_reset_postdata(  );																/* Previne a alteração em outros loops */
	?>
</div>