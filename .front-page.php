
<a href="http://localhost:8080/?page_id=58" >Blog</a>
<?php


$custom = new WP_Query('cat=1');

if($custom->have_posts()) : 
	while($custom->have_posts()): $custom->the_post();
	;?>
	
	<a href="<?= the_permalink() ;?>"><?= the_title() ;?><br></a>
	
<?php
	endwhile;
else :

	echo 'kosong';
endif;


?>