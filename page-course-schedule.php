<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>

				<div class="entry-content">
					<?php the_content(); ?>
                   <!-- TABLE -->

					<label class="table-label"> Weekly Course Schedule </label>
					<br>
					<table>
                	<?php 
                

				// Check rows exists.
				if( have_rows('course_schedule') ): ?>

					<col>
					<?php
					// Loop through rows.
					while( have_rows('course_schedule') ) : the_row();

						// Load sub field value.
						$sub_value = get_sub_field('date');
						// Output Table Data
						echo '<td class="schedule-dates">'. $sub_value .'<td>';
					// End loop.
					endwhile;
					?>
					</col>

					<col>
					<?php
					// Loop through rows.
					while( have_rows('course_schedule') ) : the_row();

						// Load sub field value.
						$sub_value = get_sub_field('course');
						// Output Table Data
						echo '<td class="schedule-course">'. $sub_value .'<td>';
					// End loop.
					endwhile;
					?>
					</col>

					<col>
					<?php
					// Loop through rows.
					while( have_rows('course_schedule') ) : the_row();

						// Load sub field value.
						$sub_value = get_sub_field('instructor');
						// Output Table Data
						// echo '<tr>';
						echo '<td>'. $sub_value .'<td>';
						// echo '<tr>';
					// End loop.
					endwhile;
					?>
					</col>

					<?php 

				endif;
                   ?>
					</table>
                   <!-- TABLE -->
				</div>

			</article>

		<?php endwhile; ?>

	</main>

<?php

get_footer();