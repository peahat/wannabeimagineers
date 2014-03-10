<?php get_header(); ?>

<p>This is the front-page.php</p>

<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>
	<hr>

<?php endwhile; else: ?>

	<p>There are no posts or pages here</p>

<?php endif; ?> -->


<div class='page-menu'>
<?php $args = array(
    'depth'       => 0,
	'sort_column' => 'menu_order',
	'menu_class'  => 'menu',
	'include'     => '',
	'exclude'     => '',
	'echo'        => true,
	'show_home'   => false,
	'link_before' => '',
	'link_after'  => '' );

	wp_page_menu( $args );

?>
</dv>

<br>

<?php get_footer(); ?>