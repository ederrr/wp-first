<form role="search" id="search-form" action="<?php echo home_url( '/' ); ?>" method="get">
	<input type="search" placeholder="Search" value="<?php echo get_search_query() ?>" name="s"/>			<!-- name é importante para WP reconhecer o input -->
	<img src="<?php echo get_template_directory_uri().'/assets/images/icons_search@3x.png'?>" alt="botao de busca">
</form>
