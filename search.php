<?php get_header() ?>

	<div class="container">
		<section>
			<p class="search-subject">Resultado de busca para <span>"<?php echo get_search_query(); ?>"</span></p>
			<p><?php get_template_part('template-parts/posts-list');?></p>
		</section>
		<?php get_sidebar(); ?>
	</div>
	

<?php get_footer() ?>