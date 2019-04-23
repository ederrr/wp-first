<article class="post-icon">
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="post-description">
		<h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h3>
		<small class="post-tag"><?php the_tags("") ?></small>
		<p><a href="<?php the_permalink() ?>"> <?php the_content() ?></a></p>
		<small>Por <?php the_author() ?> | <?php the_date() ?></small>
	</div>
</article>
<hr>