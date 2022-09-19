<form action="<?= home_url( '/' ); ?>" method="get">
	<label for="search">Search </label>
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
	<button type="submit" >Cari</button>
</form>