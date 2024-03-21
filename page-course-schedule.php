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

					<label class="table-label"> Weekly Course Schedule </label>
					<table>

					<thead>
						<tr>
							<th>Date<th>
							<th>Course<th>
							<th>Instructor<th>
						</tr>
					</thead>

                	<?php 

				// Check rows exists.
				if( have_rows('course_schedule') ): ?>

					<?php
					// Loop through rows.
					while( have_rows('course_schedule') ) : the_row();

						echo '<tr>';

						// Load sub field value.
						$date = get_sub_field('date');
						// Output Table Data
						echo '<td class="schedule-dates">'. $date .'<td>';

						$course = get_sub_field('course');
						echo '<td class="schedule-course">'. $course .'<td>';

						$instructor = get_sub_field('instructor');
						echo '<td>'. $instructor .'<td>';

						echo '</tr>';
					// End loop.
					endwhile;

				endif;
                   ?>
					</table>

				</div>

			</article>

		<?php endwhile; ?>

	</main>

<?php

get_footer();