	
<?php if(have_posts()):			
	
	while (have_posts()) : the_post(  );
		get_template_part('template-parts/post-icon');
	endwhile ?>
<?php else: ?>
<article>
	<p>Não foi encontrado nenhum artigo com o termo pesquisado</p>
</article>
<?php endif; ?>

<div class="buttons-pagination">
	<div class="navigation-posts next-posts"><?php next_posts_link('Página anterior'); ?></div>
	<div class="navigation-posts previous-posts" ><?php previous_posts_link('Proxima Página'); ?></div>
</div>
