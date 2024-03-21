<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package School_Theme
 */

get_header();
?>

<?php
function custom_excerpt_length( $length ) {
    return 25; 
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_excerpt_more( $more ) {
    global $post;
    return ' <a href="' . get_permalink( $post->ID ) . '">' . __( 'Read more about the student..', 'textdomain' ) . '</a>';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );
?>


	<main id="primary" class="site-main">


			<header class="page-header">
			<h1 class="student-header">The Class</h1>	
			</header><!-- .page-header -->


			

<div class="student-grid">			
			<?php
$args = array(
    'post_type'      => 'school-student',
    'posts_per_page' => -1,
	'orderby'        => 'title',
    'order'          => 'ASC',
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while( $query->have_posts() ) {
        $query->the_post(); 
        ?>
      <article class="student-entry">
	  <a href="<?php the_permalink(); ?>" class="student-thumbnail">
	  <h2 class="student-title"><?php the_title(); ?></h2>
        <?php the_post_thumbnail('medium', array('class' => 'student-thumbnail-image')); ?>
		</a>
        <div class="student-content">
    <?php the_excerpt();?>
	<div class="student-category">
	<?php

                            $terms = get_the_terms( get_the_ID(), 'school-student-category' ); 
                            if ( $terms && !is_wp_error( $terms ) ) {
                                echo '<ul class="student-terms">';
                                foreach ( $terms as $term ) {
                                    $term_link = get_term_link( $term );
                                    if ( !is_wp_error( $term_link ) ) {
                                        echo '<h3><a href="' . esc_url( $term_link ) . '">' . esc_html( $term->name ) . '</a></h3>';
                                    } else {
                                        echo '<li>' . esc_html( $term->name ) . '</li>';
                                    }
                                }
                                echo '</ul>';
                            }
                            ?>
	
</article>
        <?php
    }
    wp_reset_postdata();
} 
?>


	</main><!-- #main -->

<?php

get_footer();
