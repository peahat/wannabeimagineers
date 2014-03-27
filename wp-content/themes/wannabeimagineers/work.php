<?php 

/*

	Template Name: Work Page

*/


get_header(); ?>

<p>This is the work.php</p>


<?php 

	$args = array(
			'post_type' => 'work'
		);

	$the_query = new WP_Query( $args );

?>


<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<div class="project" style="background-color: <?php the_field( 'background_colour' ); ?>">


	<a href="<?php the_permalink(); ?>">
			<img src="<?php the_field( 'homepage_slider_image' ); ?>">
		</a>

		<h4>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h4>


		<?php the_field( 'description' ); ?>

		<p>
			<a class="btn blue" href="<?php the_permalink(); ?>" style="background-color: <?php the_field( 'button_color' ); ?>">
				View Project &rarr;
			</a>
		</p>

	</div>

<?php endwhile; else: ?>

	<p>There are no posts or pages here</p>

<?php endif; ?>

<?php get_footer(); ?>