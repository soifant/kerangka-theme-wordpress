
<?php

get_header();

?>
<div id="search-submit">
 <?= get_search_form() ; ;?>
 </div>
<main>

 <?php
	if( have_posts() ):
	
		//Ada postingan
		while( have_posts()) : the_post(); 
		get_template_part('content', get_post_format());
		endwhile;
	
	else:
	
		echo 'Tidak ada post';
	
	endif;
	
	dynamic_sidebar('sidebar1');
	?>
	
	</main>
<?php
get_footer();
?>