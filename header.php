<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title><?php bloginfo('name') ;?></title>
<?php wp_head() ;?>
</head>
<body>

	<header>
		<h1>
			<a href="<?= home_url() ;?>" >
				<?= bloginfo('name') ;?>
			</a>
		</h1>
		<?= bloginfo('description') ;?>
		
	<nav>
		<?php
		$arg = array('location_theme' => 'main_menu');
		wp_nav_menu($arg);
		?>
	</nav>
	</header>
	