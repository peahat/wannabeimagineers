<!DOCTYPE html>
<html>
	<head>
			<title>
				<?php

				wp_title( '-', true, 'right' );

				bloginfo( 'name' );

				?>
			</title>
			<?php wp_head(); ?>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,300,600' rel='stylesheet' type='text/css'>

	</head>
	<body>

<header>
	<div class="container">
		<div id="logo">

			<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Wannabe Imagineers" width="100%" height="" />

		</div>
	</div>

</header>

<div class="main-nav"> 
<?php 

	$args = array(
		'menu' => 'main-menu'
		);
	
	wp_nav_menu( $args );

?>
</div>