<footer>
<div id="footer-logo">
	<img src="<?php echo get_template_directory_uri().'/assets/images/icons_logo@3x.png' ?>" alt="logo do de heus">
</div>
<div id="footer-info">
	<h3>De Heus</h3>
	<p id="footer-info-adress">Avenida Brasil, 6624 - Distrito Industrial<br/><span>CEP 13505-600 Rio Claro/SP</span></p>
	<p id="footer-info-phone">+55 (19) 3522-5609</p>
	<p id="footer-info-email">contato@deheus.com</p>
</div>
<nav id="footer-categories">
<?php $cats = get_categories();

foreach ($cats as $cat) {?>

	<div class="footer-category">
		<h3><a href="<?php echo get_category_link($cat->term_id) ?>" ><?php echo $cat->name ?></a></h3><?php

		query_posts("cat=$cat->term_id;&posts_per_page=3");
	
	if (have_posts()) : while (have_posts()) : the_post(); ?>

		<p><a href="<?php the_permalink();?>"><?php echo "Loren ipsum" ?></a></p>

	<?php endwhile; endif;  ?>
	</div>

<?php } ?>
</nav>
<div id="footer-social">
	<h3>Nossas redes</h3>
	<img src="<?php echo get_template_directory_uri().'/assets/images/facebook@3x.png' ?>" alt="facebook">
	<img src="<?php echo get_template_directory_uri().'/assets/images/icons_linkedin@3x.png' ?>" alt="linkedin">
	<img src="<?php echo get_template_directory_uri().'/assets/images/youtube(2)@3x.png' ?>" alt="youtube">
</div>
<div id="footer-bar">
	<p>&copy; <?php the_time('Y') ?> DE HEUS.<span> TODOS OS DIREITOS RESERVADOS </span></p>
	<div id="footer-icons-share">
		<img src="<?php echo get_template_directory_uri().'/assets/images/facebook-logo@3x.png' ?>" alt="facebook">
		<img src="<?php echo get_template_directory_uri().'/assets/images/youtube-logo@3x.png' ?>" alt="youtube">
		<img src="<?php echo get_template_directory_uri().'/assets/images/icons_linkedin@3x.png' ?>" alt="linkedin">
	</div>
</div>
</footer>
<?php wp_footer() ?>
</body>
</html>