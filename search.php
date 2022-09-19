
<?php

get_header();

?>
<div id="search-submit">
 <?= get_search_form() ; ;?>
 </div>
<main>
Halaman cari
 <?php
	if( have_posts() ):
	
	
		//Ada postingan
		while( have_posts()) : the_post(); 
			
			if($post->post_type == 'page') continue;
			
			get_template_part('content');
		endwhile;
	
	else:
	
		echo 'Tidak ada post';
	
	endif;
	?>
	
	</main>
<?php
get_footer();
?>