<?php get_header() ?>

	<?php if (is_front_page()) { ?>
		<?php get_template_part( '/template-parts/slide' );	}?>
	
	<div class="container">
		<section>
			<?php get_template_part('template-parts/posts-list');?>
		</section>
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer() ?>