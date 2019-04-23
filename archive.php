<?php get_header() ?>

	<div class="container">
		<section>
			<?php if (is_category()) { ?>
				<h2 class="page-subject"><?php echo single_cat_title(); ?></h2>
			<?php  } elseif (is_tag()) { ?>
				<p class="search-subject">Resultado de busca para <span>"<?php single_tag_title(); ?>"</span></p>
			<?php  }  ?>
			<p><?php get_template_part('template-parts/posts-list');?></p>

		</section>
		<?php get_sidebar(); ?>
	</div>
	

<?php get_footer() ?>