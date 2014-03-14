<?php get_header(); ?>

<!--<p>This is the home.php</p> -->
<div class= "container">
	<div class= 'blog-post'>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div id="blogposttitle">
		<h3><?php the_title(); ?></h3>
	</div>
	<div id="blogpostcontent">
		<?php the_content(); ?>
	</div>
	


	<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>

	<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>