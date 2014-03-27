<?php get_header(); ?>

<div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h3><?php the_title() ;?></h3>	
		<div class="intro">
			<p><?php the_field( 'description' ); ?></p>
		</div>
		
		<p>
			<a class="btn" href="<?php the_field( 'url' ); ?>" style="background_colour: <?php the_field( 'button_colour' ); ?>">
				View Project &rarr;
			</a>
		</p>

		<hr>

		<div class="project-images">

			<?php the_field( 'project_images' ); ?>

		</div>

	<?php endwhile; else: ?>
		
		<p>There are no posts or pages here</p>

	<?php endif; ?>

</div>

<?php get_footer(); ?>