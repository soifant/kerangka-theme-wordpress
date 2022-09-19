
<?php

get_header();

?>
<main>

<?php

if(is_category()){
echo "Ini kategori"; single_cat_title();
}elseif(is_author()){
echo "Ini author". get_the_author();
}else{
echo "ini aesip";
}
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