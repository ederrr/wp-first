<?php get_header(); ?>

	<div class="container">
		<section class="post-container">
			<?php if(have_posts()):
				while (have_posts()) : the_post(  ); ?>
					<small class="breadcrumbs"><?php the_category(' '); ?> > <?php the_title(); ?></small>
					<h1 class="post-title"><?php the_title(); ?></h1>
					<small class="post-subtitle">Por <?php the_author(); ?> | <?php the_date('d/m/Y'); ?></small>
					<div class="post-content">
						<div class="post-thumbnail">
							<?php the_post_thumbnail() ?>
						</div>
						<?php the_content() ?>
						
					</div>
					<div class="post-share">
						<img src="<?php echo get_template_directory_uri().'/assets/images/icons_facebookBlue@3x.png' ?>" alt="">
						<img src="<?php echo get_template_directory_uri().'/assets/images/icons_twitterBlue@3x.png' ?>" alt="">
						<img src="<?php echo get_template_directory_uri().'/assets/images/icons_linkedinBlue@3x.png' ?>" alt="">
						<img src="<?php echo get_template_directory_uri().'/assets/images/icons_youtubeBlue@3x.png' ?>" alt="">
					</div>
					<div class="tags-container" >
						<h3>Tags</h3>
						<?php the_tags("",", ","") ?>
					</div>
					<?php 
						if( comments_open() ){ 
							comments_template(); 
						} else {
							echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
						}
						
					 ?>
				<?php endwhile ?>
			<?php else: ?>
			<div class="article">
				<p>Lamentamos mas não foram encontrados artigos.</p>
			</div>
			<?php endif; ?>
			</section>
		<?php get_sidebar() ?>
	</div>
	

<?php get_footer(); ?>
