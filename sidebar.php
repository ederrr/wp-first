<aside>
	<div class="newsletter">
		<p>Assine nossa newsletter!</p>
		<input type="email" placeholder="E-mail">
		<button>Enviar</button>
	</div>

	<h2>Artigos populares</h2>
	
	<?php 
	$args = array(
		'type' => 'post',
		'posts_per_page' => 3,
	);

	$popularPosts = new WP_Query($args);

	if($popularPosts->have_posts()):
		
		while ($popularPosts->have_posts()) : $popularPosts->the_post(  ); ?>
		<div class="popular-articles">
			<div class="popular-image">
				
				<?php if(has_post_thumbnail()):
					the_post_thumbnail(); 
				endif;?>
				
			</div>
			<div class="popular-description">
				<p><?php the_excerpt(); ?></p>
			</div>
		</div>
		<?php endwhile; else: ?>
	<div class="article">
		<p>Lamentamos mas não foram encontrados artigos.</p>
	</div>
	<?php endif;
		wp_reset_postdata(  );
	?>
	
</aside>