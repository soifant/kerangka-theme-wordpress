
<?php if(is_single()) :?>

<h2>

<?= the_title(); ?></h2>
<br>
<?php the_post_thumbnail() ;?>
<?= the_content() ;?>
<?php elseif( is_page()) :?>
<?= the_title(); ?></a></h2>
<?= the_content() ;?>
<?php else :?>
<h2>
<a href="<?= the_permalink() ;?>" >
<?= the_title(); ?></a></h2>
<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ;?>">
<?php the_author() ;?> 
</a>| 
<?= the_time() ;?> | 
<?= the_category() ;?>
<br>
<?php the_post_thumbnail('small_thumb') ;?>
<small>
<?= get_the_excerpt(); ?>
<a href="<?= the_permalink() ;?>" >
Read more...
</a>
</small>

<?php endif ;?>