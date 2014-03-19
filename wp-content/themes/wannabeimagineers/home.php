<?php get_header(); ?>

<!--<p>This is the home.php</p> -->
<div class= "container">
	<div class= 'blog-post'>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div id="blogposttitle">
		<h3><?php the_title(); ?></h3>
	</div>

	

	<div id="blogpostcontent">
		
		<small><?php the_time('F jS, Y') ?> by <?php the_author() ?></small>

		<?php the_content(); ?>

		<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>

	</div>
	


	<?php endwhile; else: ?>

		<p>There are no posts or pages here</p>

	<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>