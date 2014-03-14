<?php get_header(); ?>


<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>
	<hr>

<?php endwhile; else: ?>

	<p>There are no posts or pages here</p>

<?php endif; ?> -->

<div class="container">
	<div id="twobigbuttons">
		<div id="blogbutton" class="bigbutton clickableparentdiv">
			<a href="/wannabeimagineers/blog/">Blog</a>
		</div>
		<div id="workbutton" class="bigbutton clickableparentdiv">
			<a href="/wannabeimagineers/work/">Work</a>
		</div>
		
	</div>
	
	<!-- keep adding page content here-->

	<div id="aboutbutton" class="clickableparentdiv">
		<a href="/wannabeimagineers/About/">About</a>
	</div>
	
	<!-- don't add any page content after this point-->
</div>

<!-- <div class='page-menu'>
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
</div> -->



<?php get_footer(); ?>