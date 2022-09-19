
<footer>
<?php
$ftr = array('theme_location' => 'main_footer');
wp_nav_menu($ftr);
?>
&copy; <?= bloginfo('name') ;?> - <?= date('Y');?>
</footer>
<?php wp_footer() ;?>
</body>
</html>