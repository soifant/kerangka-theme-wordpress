
<?php

get_header();

?>
<main>
<?php
	if( have_posts() ):
	
		//Ada postingan
		while( have_posts()) : the_post(); 
			
			
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